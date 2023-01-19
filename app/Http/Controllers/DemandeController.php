<?php

namespace App\Http\Controllers;

use App\Notifications\DemandeNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class DemandeController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(["nom", "prenom", "email","phone", "address", "addresss", "pays", "ville", "post", "profession", "revenus", "credit", "durer"]);
        Notification::route('mail', 'contact@eljoinvest.lu')->notify(new DemandeNotification($data));
        return redirect(route('Home'));
    }
}
