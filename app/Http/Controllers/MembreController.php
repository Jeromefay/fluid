<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('nom', 'asc')->paginate(12);
        return view('front.membre.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $user = \Auth::user();
        return view('front.membre.edit', compact('user'));
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
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'adresse' => 'required',
            'code_postal' => 'required',
            'ville' => 'required',
            'telephone' => 'required',
            'pseudo_facebook' => 'required',
            'picture' => 'image|max:3000', 
            'competence_1' => 'required', 
            'dispo' => 'required',
            'description' => 'required',
        ]);
        $user = User::whereId($id)->update($request->except(['_method', '_token']));
        
        $im = $request->file('picture');
        if (!empty($im)) {
            
            $link = $request->file('picture')->store('');
            // mettre à jour la table picture pour le lien vers l'image dans la base de données
            $event->update([
                'url_img_user' => $link,
            ]);
        }

        return redirect()->route('membre.index')->with('message', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = \Auth::user();
        $user->delete();
        return redirect()->route('/');
    }
}
