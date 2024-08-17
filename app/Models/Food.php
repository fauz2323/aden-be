<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get the category that owns the Food
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    /**
     * Get all of the cart for the Food
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cart()
    {
        return $this->hasMany(Food::class, 'food_id', 'id');
    }

    /**
     * Get all of the orderList for the Food
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderList()
    {
        return $this->hasMany(UserOrderList::class, 'food_id', 'id');
    }
}
