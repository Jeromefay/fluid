<?php

namespace App\Http\Controllers;
Use Storage;
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

        if (\Auth::user()->is_admin == 1)
        {
            return view('back.index');
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
        $categories = Category::pluck('titre', 'id')->all();

        if (\Auth::user()->is_admin == 1)
        {
            return view('back.event.create', compact('categories'));
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

        $this->validate($request, [
            'titre' => 'required',
            'description' => 'required|string',
            'status' => 'in:Publié,Brouillon',
            'prix' => 'required',
            'prix_adherent' => 'required',
             'date' => "date:Y-m-d|nullable",
            'category_id' => 'integer',
            'lien_evenement' => 'required|string',
            'picture' => 'image|max:3000', 
        ]);
        $event = Event::create($request->all());
        
        $im = $request->file('picture');
        if (!empty($im)) {
            
            $link = $request->file('picture')->store('');
            // mettre à jour la table picture pour le lien vers l'image dans la base de données
            $event->pictureEvent()->create([
                'url_img_event' => $link,
                'titre' => 'default'
            ]);
        }

        return redirect()->route('event.index')->with('message', 'success');
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
        $event = Event::find($id);
        $categories = Category::pluck('titre', 'id')->all();

        if (\Auth::user()->is_admin == 1)
        {
           
            return view('back.event.edit', compact('event', 'categories'));
        }
       
        return redirect()->guest('/');
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
        $this->validate($request, [
            'titre' => 'required',
            'description' => 'required|string',
            'status' => 'in:Publié,Brouillon',
            'prix' => 'required',
            'prix_adherent' => 'required',
             'date' => "date:Y-m-d|nullable",
            'category_id' => 'integer',
            'lien_evenement' => 'required|string',
            'picture' => 'image|max:3000',
        ]);
        $event = Event::find($id); // associé les fillables
        $event->update($request->all());
        
        // image
        $im = $request->file('picture');
        
        // si on associe une image à un event 
        if (!empty($im)) {
            $link = $request->file('picture')->store('');
            // suppression de l'image si elle existe 
            if(count($event->pictureEvent)>0){
                Storage::disk('local')->delete($event->pictureEvent->url_img_event); // supprimer physiquement l'image
                $event->pictureEvent()->delete(); // supprimer l'information en base de données
            }
            // mettre à jour la table picture pour le lien vers l'image dans la base de données
            $event->pictureEvent()->create([
                'url_img_event' => $link,
                'titre' => 'default'
            ]);
            
        }
        return redirect()->route('event.index')->with('message-success', 'Évènement édité avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect()->route('index');
    }
}
