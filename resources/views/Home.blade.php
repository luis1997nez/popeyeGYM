@extends('layouts.app')

@section('content')

<a class="btn btn-secondary" href="<?php echo action('HomeController@show') ?>">ver reservaciones</a>
<link href="css/home.css"rel="stylesheet" type="text/css">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
<div class="row justify-content-center">
<div class="col-md-5">
<h2>REALIZAR CITA</h2>
<form action="{{route('home.store')}}" method=POST>
<div class="form-group">

<input type="text" name="numero" class=form-control placeholder="numero telefonico" maxlength="10,0" required>

<div class="form-group">

<input type="date" name="fecha" class=form-control placeholder="numero telefonico" min="<?php echo date('Y/m/d') ?>" max="<?php $fecha_actual = date("d-m-Y"); echo date("d-m-Y",strtotime($fecha_actual."+ 1 month")); ?>" required>
</div>

<div class="form-group">
<input type="submit" value="enviar" onclick="return confirm('¿Enviar?');" class="btn btn-primary">
</div>

</div>

{{ csrf_field() }}
</form>
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
