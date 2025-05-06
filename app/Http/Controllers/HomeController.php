<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $meals = Meal::latest()->take(3)->get();

        $products = Product::latest()->take(6)->get();
    
        return view('buyer.home', compact('meals', 'products'));
    }

    public function indexSeller()
    {
        $products = Product::latest()->take(6)->get();
    
        return view('seller.home', compact( 'products'));
    }    

    public function optimatch()
    {
        return view('buyer.optimatch');
    }
}
