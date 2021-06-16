<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta <charset="utf-8">
<link href="css/neww.css" rel="stylesheet"/>
<script src="js/main.js"></script>
</head>
<body>
<div class="conte">
<div class="title">
<main class="title">
<h1> USUARIO NUEVO </h1>
</main>
</div>
<div class="bienvenido">
<h2> BIENVENIDO </h2><br>
</div>
<div class="registro">
<?php
//var_dump($_POST);
echo $_POST['usuaria']."<br>"."<br>";
echo $_POST['correo']."<br>"."<br>";
?>
</div>
<div class="regresa">
<h2> REGRESA AL MENU PRINCIPAL E INGRESA CON TU USUARIO </H2>
</div>
<div class="boton">
<form action="index.html" >
	<input type="submit" class="submit" value="continuar"><br>
	</form>
	</div>
</div>
</div>
</div>
</body>
</html>
