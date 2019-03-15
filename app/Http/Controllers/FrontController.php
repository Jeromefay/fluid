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
            $user = \Auth::user();
            $view->with('user', $user);
        });
    }

    public function index(){
        $expos = Event::where('category_id', 1)->Published()->orderBy('date', 'asc')->first();
        $workshops = Event::where('category_id', 2)->Published()->orderBy('date', 'asc')->first();
        $excursions = Event::where('category_id', 3)->Published()->orderBy('date', 'asc')->first();
        $soirees = Event::where('category_id', 4)->Published()->orderBy('date', 'asc')->first();
        $partners = Partner::all();
        return view('front.index', compact('expos', 'partners', 'workshops', 'excursions', 'soirees'));
    }

    public function showExpo(){
        $event = Event::where('category_id', 1)->Published()->orderBy('date', 'asc')->first();
        $expos = Event::Published()->where('category_id', 1)->get();
        return view('front.expo', compact('expos', 'event'));
    }

    public function showOneExpo(int $id){
        $event = Event::find($id);
        return view('front.OneExpo', compact('event'));
    }

    public function showWorkshop(){
        $event = Event::where('category_id', 2)->Published()->orderBy('date', 'asc')->first();
        $workshops = Event::Published()->where('category_id', 2)->get();
        return view('front.workshop', compact('workshops', 'event'));
    }

    public function showExcursion(){
        $event = Event::where('category_id', 3)->Published()->orderBy('date', 'asc')->first();
        $excursions = Event::Published()->where('category_id', 3)->get();
        return view('front.excursion', compact('excursions', 'event'));
    }

    public function showSoiree(){
        $event = Event::where('category_id', 4)->Published()->orderBy('date', 'asc')->first();
        $soirees = Event::Published()->where('category_id', 4)->get();
        return view('front.soiree', compact('soirees', 'event'));
    }

    public function showShop(){
        $products = Product::all();
        return view('front.shop', compact('products'));
    }

}

