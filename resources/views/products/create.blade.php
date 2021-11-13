@extends('layouts.app')



@section('content')
<link href="css/bootstrap.css"rel="stylesheet" type="text/css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
       
            <div class="card">
            
                <div class="card-header"> Agregar Curso
                <a href="{{ route('products.index') }}"  style="margin-left: 450px" class="btn btn-success">Regresar</a></div>
                
                <div class="card-body">
                

                    {!! Form::open(['route' => 'products.store', 'enctype'=>"multipart/form-data", ]) !!}

                            @include('products.partials.form')

                    {!! Form::close() !!}

                </div>
            </div>

        </div>
     </div>
 </div>



 @endsection       