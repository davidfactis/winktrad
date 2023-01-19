<?php

namespace App\Http\Controllers;

use App\Notifications\ContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(["name", "lastname", "email", "subject"]);
        Notification::route('mail', 'contact@eljoinvest.com')->notify(new ContactNotification($data));

        return redirect(route('Home'));
    }
}
