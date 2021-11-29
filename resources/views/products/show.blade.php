@extends('layouts.app')

@section('content')
<link href="css/home.css"rel="stylesheet" type="text/css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Curso
                <a href="{{ route('products.index') }}"  style="margin-left: 450px" class="btn btn-success">Regresar</a></div>
                </div>

                <div class="card-body">

                    <p><strong>Nombre: </strong>{{ $product->name }}</p>
                    <p><strong>Descripcion: </strong>{{ $product->description }}</p>
                    <p><strong>tipo: </strong>{{ $product->tipo }}</p>
                    <p><strong>Costo: </strong>{{ $product->costo }}</p>
                    <div class="cards bg-light text-center ">
                    <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                         <div class="inner">
                             <img src="{{asset('images').'/'.$product->imagen }}" class="card-img-top" alt="card image cap">
                         </div>
                            
                    </div>
             </div>
                    </div>
</div>
                </div>


              
                
            </div>

        </div>
     </div>
 </div>



 @endsection       