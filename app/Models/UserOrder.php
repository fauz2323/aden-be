<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    use HasFactory;
    protected $guarded =[];

    /**
     * Get the user that owns the UserOrder
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get all of the orderList   for the UserOrder
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderList()
    {
        return $this->hasMany(UserOrderList::class, 'user_order_id', 'id');
    }
}
