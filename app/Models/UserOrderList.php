<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOrderList extends Model
{
    use HasFactory;
    protected $guarded =[];

    /**
     * Get the order that owns the UserOrderList
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo(UserOrder::class, 'order_id', 'id');
    }

    /**
     * Get the food that owns the UserOrderList
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function food()
    {
        return $this->belongsTo(Food::class, 'food_id', 'id');
    }
}
