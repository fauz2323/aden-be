<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;
use App\Models\UserOrder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   function index() {
    $categoryTotal = Category::count();
    $order = UserOrder::count();
    $food = Food::count();
    return view('web.admin.home.index',compact('categoryTotal','order','food'));
   }
}
