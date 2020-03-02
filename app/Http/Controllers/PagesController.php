<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use \App\client;

class PagesController extends Controller
{
    public function home()
    {
        $client = client::all();
        $client = $client->reverse();
        return view('home', ['client' => $client]);
    }
}
?>