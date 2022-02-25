<?php
echo "cargando página";
$input_celsius = $_REQUEST['entrada'];

$wsdl   = 'https://www.w3schools.com/xml/tempconvert.asmx?WSDL';
$client = new SoapClient($wsdl, array('trace'=>1));  // The trace param will show you errors

$request_param = array('Celsius' => $input_celsius);

try {
    $responce_param = $client->CelsiusToFahrenheit($request_param);
    $result_fahrenheit= $responce_param->CelsiusToFahrenheitResult;

} catch (Exception $e) {
    echo "<h2>Exception Error</h2>";
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <title>Conversor de temperaturas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>

  body {
     font-family: blippo;
     background-color: #E2F8FF;
   }


</style>

<body>

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
            <a href="3-formulario-html" class="nav-link ">Actividades XML</a>
          </li>
        <ul>
      </div>
    </nav>
  </div><!--Fin navar-->

  <div class="container mt-3">
    <h1>SOAP Web Service Consume using PHP</h1>
     <h2><a href="https://www.w3schools.com/xml/tempconvert.asmx?WSDL">WSDL utilizado</a></h2>

    <h2><?php echo $input_celsius . ' Celsius =>' . $result_fahrenheit . ' Fahrenheit' ?></h2>
</div>



</body>
</html>
