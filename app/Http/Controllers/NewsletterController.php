<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Newsletter;


class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        Newsletter::subscribeOrUpdate($request->input('email'), [], 'newsletter');

        return redirect()->back()->with('newsletter', 'Merci d\'avoir souscrit à la newsletter !');
    }
}