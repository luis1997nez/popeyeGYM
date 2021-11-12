@extends('layouts.app')

@section('content')

<div class="container">
<h1>Cursos</h1>
<br>

<div class="container">
    <form class="d-flex" action="/catalogo" method="GET">
        <input  class="form-control me-2" pattern="[A-Za-z]" name="buscar" type="search" placeholder="Busca desde lo mejor en ejercicios." aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
      <br>
</div>
             <div class="container">
                <div class="row row-cols-1 row-cols-md-2 g-2">
                    @foreach ($products as $product)
                    <div class="cardlalo" style="width: 18rem;">
                        <img src="images/{{$product->imagen}}" class="card-img-top" alt="{{$product->imagen}}" width="278px" height="191px">
                        <div class="card-body">
                         <h5 class="card-title">{{$product->name}}</h5>
                         <h6 class="card-subtitle mb-2 text-muted">{{$product->tipo}}</h6>
                         <h6 class="card-subtitle mb-2 text-muted">{{$product->costo}}</h6>
                          <p class="card-text">{{$product->description}}</p>
                          <a href="https://api.whatsapp.com/send?phone=+5219983942633"  class="btn btn-warning">Agenda Cita</a>
                        </div>
                      </div>
                     
                    @endforeach
                </div>
             </div>
              {{$products->links()}}

@endsection
