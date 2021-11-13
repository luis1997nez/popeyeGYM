<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reserva extends Controller
{
    public function index()
    {
        //
       $reservas = Reserva::paginate();

       return view('home', compact('reserva'));

    }
    public function create()
    {
        //
        return view('reservas.create');
    }
}
