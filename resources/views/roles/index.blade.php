@extends('layouts.app')



@section('content')

<link href="css/home.css"rel="stylesheet" type="text/css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Roles</div>
                     @can('roles.create')
                        
                     @endcan
                <div class="card-body">

                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($roles as $role)

                                    <tr>
                                        <td>{{ $role->id }}</td>
                                        <td>{{ $role->name }}</td>
                                        
                                        <td>
                                            @can('roles.show')
                                                <a href="{{ route('roles.show', $role->id )}}" class="btn btn-primary">Ver</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('roles.edit')
                                                <a href="{{ route('roles.edit', $role->id )}}" class="btn btn-success">Editar</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('roles.destroy')
                                               {!! Form::open(['route' =>  ['roles.destroy', $role->id], 'method' => 'DELETE']) !!}
                                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                               {!! Form::close() !!}
                                            @endcan
                                        </td>
                                           

                                    </tr>

                                @endforeach
                            </tbody>
                        </table>

                    {{ $roles->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
