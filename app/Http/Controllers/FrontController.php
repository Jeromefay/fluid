<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Event;
use App\Partner;
use App\Product;

class FrontController extends Controller
{

    protected $paginate = 6;

    public function __construct(){
        view()->composer('partials.menu', function($view){
            $events = Event::all();
            $view->with('events', $events );
        });
    }

    public function index(){
        $products = Product::all();
        $partners = Partner::all();
        $events = Event::all();
        return view('front.index', compact('products', 'partners', 'events'));
    }

    public function showExpo(){
        $events = Event::all()->where('category_id', 1);
        $expos = Event::all()->where('category_id', 3);
        return view('front.expo', compact('events', 'expos'));
    }

}

