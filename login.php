<?php
	require_once ('backend/Modelo/conexion.php');
	$model = new Conexion();
	$conexion = $model->get_conexion();
	session_start();
		if(isset($_SESSION['username'])){
      header('location: index.php');
    }else{
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio de Sesión</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">    
	<link rel="shortcut icon" href="images/icon.ico" type="image/x-icon">
   
	<link rel="stylesheet" href="css/estilos/login.css">



    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

  	<header>
  		<div>
			<p class = "regresar"><a href="index.php">Volver a Popeye Gym</a></p>
		</div>
	 </header>

	<section>
	<div class="formulario">
		<form action="backend/Controlador/loginController.php" class="login" method = "POST">
			<h3 class="text-center mb-4 billing-heading">Iniciar Sesión</h3>
			<div class="form-group">
				<label for="Nombre">Correo electrónico:</label>
				<input type="email" class="form-control" name="correoUs" id="Nombre" placeholder="Correo electronico" minlength="7">
			</div>
			<div class="form-group">
				<label for="Pass">Contraseña</label>
				<input type="password" class="form-control" name="pass" id="Pass" placeholder="Contraseña">
			</div>
			<p class="text-center">
        <input type = "submit" class="btn btn-primary btn-block" name = "enviar" value = "Iniciar Sesión">
				<!--<button class="btn btn-primary btn-block" name = "enviar">Login</button>-->
			</p>
			<div class="text-center">
				<p>¿Usted no tiene una cuenta? <a href="registro.php">Crear una cuenta</a></p>
			</div>
    </form>

	</div>
	</section>

    <footer class="ftco-footer ftco-section img">
      <div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Sobre Nosotros</h2>
              <p>Somos un centro de acondicionamiento físico y gimnasio profesional a tu alcance.
        Contamos con excelentes instructores y el mejor equipo para cumplir con tus rutinas diarias.
        Ven a conocernos y construye tu cuerpo fitness.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">¿Alguna Pregunta?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Paseos Nikté Supermanzana 255, Manzana 48, Lote 8 Avenida Galaxias del Sol.</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">(998) 292 21 37</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">salud@popeye.com.mx</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> todos los derechos reservados.
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>

	<script src="login/js/jquery-3.1.1.min.js"></script>
	<script src="login/js/bootstrap.min.js"></script>
</body>
</html>

<?php
}
?>