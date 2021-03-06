<?php
Namespace App\Http\Controllers;
use App\Notifications\InboxMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Admin;
Class ContactController extends Controller
{
	public function show() 
	{
		$user = \Auth::user();
		return view('contact', compact('user'));
	}
	public function mailToAdmin(ContactFormRequest $message, Admin $admin)
	{        //send the admin an notification
		$admin->notify(new InboxMessage($message));
		// redirect the user back
		return redirect()->back()->with('message', 'Merci pour votre message! Nous revendrons vers vous bientôt!');
	}
}
