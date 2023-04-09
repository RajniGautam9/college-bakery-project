<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\brand;
use App\faq;
use App\order;
use App\category;
class DashboardController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()

{
    $brand = brand::count();
    $faq = faq::count();
    $order = order::count();
    $category = category::count();
    return view('index',compact('brand','faq','order','category'));
}
}
