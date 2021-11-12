<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;

class HomeController extends Controller
{

  


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     * 
     * 
     */


    public function show()
    {
      
        return view('Home');
        

    }

    public function store(Request $request)
    {
     $reserva = new Home();
     $fecha="";
     $valor="Lo sentimos la solicitud no puede ser procesada por que la fecha es menor a la actual";
     $date=date('d/m/Y');
      $reserva->numero = $request->input('numero');
      $reserva->fecha = $request->input('fecha');

      $request->$fecha= $request->input('fecha');
      
      
        $reserva->save();
        return view ('guardado');
    
      

    }


    public function create()
    {
        //
        return view('reservas.create');
    }



  

    public function quienessomos(){
        return view ('Qsomos');
    }
    public function welcome(){
        return view ('welcome');
    }
}
