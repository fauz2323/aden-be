<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Models\User;
use App\Models\UserCart;
use App\Models\UserOrder;
use App\Models\UserOrderList;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function addToCart(Request $request)
    {
        $request->validate([
            'uuid' => 'required',
            'quantity' => 'required',
        ]);

        $checkOrder = UserOrder::where('user_id', auth()->user()->id)->where('status', 'pending')->first();
        if ($checkOrder) {
            return response()->json([
                'message' => 'please make payment',
            ], 222);
        }

        $food = Food::where('uuid', $request->uuid)->first();

        if (!$food) {
            return response()->json([
                'message' => 'Food not found'
            ], 404);
        }

        $cart = new UserCart();
        $cart->user_id = auth()->user()->id;
        $cart->food_id = $food->id;
        $cart->quantity = $request->quantity;
        $cart->price = $food->price * $request->quantity;
        $cart->save();


        return response()->json([
            'message' => 'Success add to cart'
        ]);
    }

    function getCart()
    {
        $cart = UserCart::where('user_id', auth()->user()->id)->with('food')->get();

        return response()->json([
            'message' => 'Success get cart data',
            'cart' => $cart
        ]);
    }

    function setOrder()
    {
        $checkOrder = UserOrder::where('user_id', auth()->user()->id)->where('status', 'pending')->first();
        if ($checkOrder) {
            return response()->json([
                'message' => 'Success set order, please wait for confirmation',
                'order' => $checkOrder,
            ]);
        }

        $cart = UserCart::where('user_id', auth()->user()->id)->with('food')->get();

        if ($cart->count() == 0) {
            return response()->json([
                'message' => 'Cart is empty',
            ], 222);
        }

        $rand = rand(100, 999);
        $order = new UserOrder();
        $order->user_id = auth()->user()->id;
        $order->total_price = $cart->sum('price') + $rand;
        $order->status = 'pending';
        $order->save();

        foreach ($cart as $key => $value) {
            $order_list = new UserOrderList();
            $order_list->user_order_id = $order->id;
            $order_list->food_id = $value->food_id;
            $order_list->quantity = $value->quantity;
            $order_list->price = $value->price;
            $order_list->save();

            // $value->delete();
        }

        return response()->json([
            'message' => 'Success set order, please wait for confirmation',
            'order' => $order,
        ]);
    }

    function getDetailOrder(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);
        $PaymentOrder = UserOrder::with('orderList')->find($request->id);

        return response()->json([
            'message' => 'Success get payment',
            'order' => $PaymentOrder
        ]);
    }

    function makePayment()
    {
        $PaymentOrder = UserOrder::where('user_id', auth()->user()->id)->where('status', 'pending')->with('orderList')->first();
        $PaymentOrder->status = 'paid';
        $PaymentOrder->save();

        return response()->json([
            'message' => 'Success make payment',
            'order' => $PaymentOrder
        ]);
    }

    function checkPayment()
    {
        $PaymentOrder = UserOrder::where('user_id', auth()->user()->id)->where('status', 'pending')->first();
        if ($PaymentOrder) {
            return response()->json([
                'message' => 'please make payment',
                'order' => $PaymentOrder,
            ]);
        } else {
            return response()->json([
                'message' => '-',
            ], 222);
        }
    }

    function getAllOrders() {
        $user = User::find(auth()->user()->id);

        $orders = UserOrder::where('user_id', $user->id)->with(['orderList'=>function($query){
            $query->with(['food'=>function($query){
                $query->select('name')->first();
            }]);
        }])->get();

        return response()->json([
            'message' => 'Success get all orders',
            'orders' => $orders
        ]);
    }
}
