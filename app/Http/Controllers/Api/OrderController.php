<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Models\UserCart;
use App\Models\UserOrder;
use App\Models\UserOrderList;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function addToCart(Request $request) {
        $request->validate([
            'uuid'=>'required',
            'quantity'=>'required',
        ]);

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

    function getCart() {
        $cart = UserCart::where('user_id', auth()->user()->id)->with('food')->get();

        return response()->json([
            'message' => 'Success get cart data',
            'cart' => $cart
        ]);
    }

    function setOrder() {
        $cart = UserCart::where('user_id', auth()->user()->id)->with('food')->get();

        $order = new UserOrder();
        $order->user_id = auth()->user()->id;
        $order->total_price = $cart->sum('price');
        $order->status = 'pending';
        $order->save();

        foreach ($cart as $key => $value) {
            $order_list = new UserOrderList();
            $order_list->order_id = $order->id;
            $order_list->food_id = $value->food_id;
            $order_list->quantity = $value->quantity;
            $order_list->price = $value->price;
            $order_list->save();
        }
    }
}