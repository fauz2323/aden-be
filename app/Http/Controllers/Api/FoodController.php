<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    function foodType() {
        $type = Category::all();

        return response()->json([
            'message' => 'Food type',
            'types' => $type
        ]);
    }

    function getFood() {
        $food = Food::with('category')->get();

        return response()->json([
            'message' => 'Food list',
            'foods' => $food
        ]);
    }

    function getFoodByUuid(Request $request) {
        $request->validate([
            'uuid' => 'required'
        ]);

        $food = Food::with('category')->where('uuid', $request->uuid)->first();

        return response()->json([
            'message' => 'Success get Food Data',
            'food' => $food
        ]);
    }

    function getFoodByCategory(Request $request) {
        $request->validate([
            'category' => 'required'
        ]);

        $category = Category::where('name', $request->category)->first();
        if (!$category) {
            return response()->json([
                'message' => 'Category not found'
            ], 404);
        }

        $food = Food::with('category')->where('category_id', $category->id)->get();

        return response()->json([
            'message' => 'Success get Food Data',
            'foods' => $food
        ]);
    }
}
