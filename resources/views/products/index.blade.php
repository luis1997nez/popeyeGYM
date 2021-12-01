@extends('layouts.app')
@section('content')
<link href="css/home.css"rel="stylesheet" type="text/css">
<div class="container" width="65">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">CURSOS</div>
                     @can('products.create')
                        <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary pull-right">Crear</a>
                     @endcan
                <div class="card-body">

                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Tipo</th>
                                
                                    

                                    <th>&nbsp;</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($products as $product)

                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->tipo }}</td>
                                        <td><img  src="{{asset('images').'/'.$product->imagen }}" width="115" ></td>
                                        

                                        <td>
                                            @can('products.show')
                                                <a href="{{ route('products.show', $product->id )}}" class="btn btn-primary">Ver</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('products.edit')
                                                <a href="{{ route('products.edit', $product->id )}}" class="btn btn-success">Editar</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('products.destroy')
                                               {!! Form::open(['route' =>  ['products.destroy', $product->id], 'method' => 'DELETE']) !!}
                                                    <button class="btn btn-sm btn-danger" onclick="return confirm('¿SEGURO QUE QUIERES ELIMINAR LA SIGUIENTE INFORMACIÓN?');">Eliminar</button>
                                               {!! Form::close() !!}
                                            @endcan
                                        </td>
                                           

                                    </tr>

                                @endforeach
                            </tbody>
                        </table>

                    {{ $products->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
