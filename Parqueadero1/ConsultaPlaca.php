<?php session_start();
if ($_SESSION['user']!=null) {
  include("php/notify.php");
 ?>
<html>
  <head>
   <link rel="shortcut icon" href="images/tire-icon.png">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/loginSS.css" media="screen"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300i" rel="stylesheet">
    <title>Ingreso de Motocicletas</title>
    <style media="screen">
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
    </style>
    <script type="text/javascript" src="php/validacion.js"></script>
  </head>
  <body>


  <div id="">
      <form id="consulta" action="php/ConsultaPlaca1.php" method="POST" onsubmit="return validacion()" name="formulario1">

             <label for="">Consulta placa</label></br>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Placa:&nbsp;&nbsp;&nbsp;<input type="text" name="placa" id="placa" placeholder="Placa">
             &nbsp;&nbsp;Precio/Hora:<input type="number" name="preciohora" value="700"></br>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Estudiante: &nbsp;&nbsp;SI<input type="radio" name="stu" value="SI" checked> NO<input type="radio" name="stu" value="NO"></br>
             &nbsp;&nbsp;&nbsp;&nbsp;Pago Diario: &nbsp;&nbsp;SI<input type="radio" name="diario" value="SI"> NO<input type="radio" name="diario" value="NO" checked></br>
            &nbsp;&nbsp;&nbsp;Mensualidad: &nbsp;SI <input type="radio" name="mensual" value="SI">NO <input type="radio" name="mensual" value="NO" checked></br>
            <input type="submit" name="" value="Consultar" ></br>


      </form>
    </div>



     <div class="">
      <input type="button" style="position: absolute; top: 400; left: 200;" value="BALANCE DIARIO" class="myButton" onclick="window.open('php/consultacaja.php','nuevaVentana','width=1000, height=670, top=0, left=0')" />
      <a href="php/close.php" class="myButton" style="position: absolute; top: 0; left: 200;">CERRAR SESION</a>
      </div>
  </body>
</html>
<?php
newss();
}
else {
  echo "<H1>Por Favor Inicie Sesion</H1> ";
}
 ?>