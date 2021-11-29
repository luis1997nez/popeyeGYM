@extends('layouts.app')

@section('content')


<div class="content">
    <div class="jumbotron" style="
       background-image: url('images/gym/7.jpg');
       background-size: cover; background-size: 100% 100%;
       color:#fff;
       background-repeat:no-repeat;">
         <h1 class="display-4">Bienvenido a</h1>
            <h1 >GYM POPEYE </h1>
                <p class="lead">Una experiencia completa
              para que cuides tu salud donde quieras.</p>
    </div>
        <h1>Una experiencia completa
            para que cuides tu salud donde quieras.</h1>
  <div class="container">
</div>
<br><br><br>



    <div class="container">  
    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
    <img src="images/gym/1.jpg" class="card-img-top" alt="card image cap">
      <div class="card-body">
      <h5 class="card-title">Clases</h5>
     
        <a href="{{ route ('catalogo') }}"  class="btn btn-warning">ver mas</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img src="images/gym/2.jpg" class="card-img-top" alt="card image cap">
      <div class="card-body">
      <h5 class="card-title">xd</h5>
       
        
        <a href="{{ route ('catalogo') }}"  class="btn btn-warning">ver mas</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img src="images/gym/3.jpg" class="card-img-top" alt="card image cap">
      <div class="card-body">
        <h5 class="card-title">Cardio</h5>
        
        <a href="{{ route ('catalogo') }}"  class="btn btn-warning">ver mas</a>
      </div>
    </div>
  </div>
</div>
</div>

<br><br><br>


        <div class="container">

            <h4><br/>
            Todo lo que necesitas
Un ecosistema de fitness que ofrece más libertad a la hora de entrenar.
            </h4>

        </div>    
    </div>
    <br><br><br>
        <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="images/gym/4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="images/gym/5.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="images/gym/4.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
</div>

    <div class="content">
        <br><br><br>
    <div class="contenido">
        <br><br>
            <h1>¡Tu nuevo comienzo empieza hoy!<h1>
            <h5>Te acompañamos en este viaje, de principio a fin<h5>
            <h5>¡Contáctanos!<h5>
            <br><br>
            <a href="https://api.whatsapp.com/send?phone=+529982037227"  class="btn btn-warning">WhatsApp</a>
        <br><br>
    </div>
    <div class="title m-b-md">
        <div class="links">
            <a href="">facebook @Ferc</a> 
    </div>



@endsection
         
       
