<?php

namespace App\Livewire\Table;

use App\Models\UserOrder;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Livewire\Component;

class OrderTable extends Component
{
    public $filter='all';
    public function render()
    {
        return view('livewire.table.order-table',[
            'data'=>$this->getData($this->filter)
        ]);
    }

    public function getData($filter): LengthAwarePaginator {
        if ($filter == 'all') {
           return UserOrder::orderBy('created_at', 'desc')->paginate(100);
        } else {
            return UserOrder::where('status',$filter)->orderBy('created_at', 'desc')->paginate(100);
        }
    }

    public function confirmOrder($id) {
        $order = UserOrder::find($id);
        if ($order->status == 'paid') {
            $order->status = 'processing';
            $order->save();
        }else if ($order->status == 'processing') {
            $order->status = 'completed';
            $order->save();
        }

        session()->flash('success', 'Success update order');
    }

    public function cancelOrder($id) {
        $order = UserOrder::find($id);
        $order->status = 'cancelled';
        $order->save();
        session()->flash('success', 'Success cancel order');
    }
}
