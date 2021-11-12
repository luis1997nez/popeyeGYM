<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use DB;
use App\Product;

class CatalogoController extends Controller
{
    public function index(Request $request)
    {
        if($request){
            $query= trim($request->get('buscar'));
            $products = DB::table('products')->where('name','LIKE','%'.$query.'%')
            ->orwhere('tipo','LIKE','%'.$query.'%')
            ->orwhere('name','LIKE','%'.$query.'%')
            ->paginate(6)
            ;
           
        }else{
            $products = DB::table('products')->paginate(6);
        }

        return view('Catalogo', compact('products'));
    }
  

 
   public function show(Product $product)
   {
       //
       return view('products.show', compact('product'));

       
   }


}



