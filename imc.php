<?php
$nombre = $_REQUEST['nombre'];
$peso = $_REQUEST['peso'];
$altura = $_REQUEST['altura'];

try {
		// convertimos cm en m
		$altura = $altura / 100;


		//formula peso(kg)/talla(m2)
        $imc = $peso / ($altura * $altura);
        //redondeamos a dos decimales
        $imc = round($imc, 2);

} catch (Exception $e) {
    echo "<h2>Exception Error</h2>";
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <title>Servcio REST calculadora de IMC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

	<style>

    body {
       font-family: blippo;
        background-color: #E2F8FF;
     }

    #entrada {
      width: 20%;
    }

  </style>

</head>
<body>
	<!--navar-->
	<div>
	  <nav class="navbar navbar-expand-sm bg-info navbar-white">
	    <div class="container-fluid">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a href="index.html" class="nav-link">Actividad 9</a>
	        </li>
	        <li class="nav-item">
	          <a href="imc.html" class="nav-link">Actividad 10</a>
	        </li>
	        <li class="nav-item">
	          <a href="actividad10.html" class="nav-link ">Actividades XML</a>
	        </li>
	      <ul>
	    </div>
	  </nav>
	</div><!--Fin navar-->

  <div class="container mt-3">
    <h1>Servcio REST calculadora de IMC de nombre alumno (cada uno su nombre) </h1>
    <h2><?php echo "Hola " . $nombre . ' tu imc =>' . $imc  ?></h2>
	<br>

	<img src="https://univiasecmate3.files.wordpress.com/2012/05/img212.jpg" class="rounded" alt="Cinque Terre">
</div>

</body>
</html>
