<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Event;
use App\Partner;
use App\Product;
use App\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::paginate(5);

        if (\Auth::user()->is_admin == 1)
        {
            return view('back.index', compact('products', 'partners', 'events', 'users'));
        }

        return redirect()->guest('/');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event::all();
        $categories = Category::pluck('titre', 'id')->all();

        if (\Auth::user()->is_admin == 1)
        {
            return view('back.event.create', compact('events', 'categories'));
        }

        return redirect()->guest('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /* dump($_FILES); */
        $this->validate($request, [
            'titre' => 'required',
            'description' => 'required|string',
            'category_id' => 'integer',
            'status' => 'in:publié,brouillon',
            'picture' => 'image|max:3000',
            'date' => 'required|string',
        ]);
        
        $events = Event::create($request->all());

        /* $events->pictureEvents()->attach($request->categories); */

        // image
        $im = $request->file('picture');
        
        if (!empty($im)) {
            
            $link = $request->file('picture')->store('');

            $events->pictureEvent()->create([
                'url_img_event' => $link,
                /* 'title' => $request->title_image?? $request->title */
            ]);
        }

        return redirect()->route('index')->with('message', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Partner::find($id);
        $event->delete();
        return redirect()->route('admin.index');
    }
}
