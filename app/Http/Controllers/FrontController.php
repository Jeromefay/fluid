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
        $expos = Event::all()->where('category_id', 1);
        return view('front.expo', compact('expos'));
    }

    public function showWorkshop(){
        $workshops = Event::all()->where('category_id', 2);
        return view('front.workshop', compact('workshops'));
    }

    public function showExcursion(){
        $excursions = Event::all()->where('category_id', 3);
        return view('front.excursion', compact('excursions'));
    }

    public function showSoiree(){
        $soirees = Event::all()->where('category_id', 4);
        return view('front.soiree', compact('soirees'));
    }

    public function showShop(){
        $products = Product::all();
        return view('front.shop', compact('products'));
    }

}

