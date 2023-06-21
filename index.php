<html>

<head>
<title>Aerolinea MR</title>
<meta charset="UTF-8">
<style>

body{
	font-family: Comic Sans MS, cursive;
	font-size: 20;
	color: black;
	margin: 0;
}

img{
border: #4E6B9E 5px solid;
}

.BOTONES{
	font-family: Comic Sans MS, cursive;
	font-size: 20;
	height: 30;
	border: #BF9BB4 3px solid;
}

.MENU{

	background-color: #97B2E4;
}

td{
	text-align: center;
}

</style>

</head>

<body>

<p class="MENU">

<table align="center" cellpadding="10">
<tr>
	<td><a href="index.php"><img src="MR.png" width="150" height="85"></a></td>
	<td><h2 style="margin: 0;">Aerolineas MR</h2></td>
	<td><button class="BOTONES" onclick="location.href='iniciar sesion.php'">Iniciar sesión</button></td>
	<td><button class="BOTONES" onclick="location.href='#mapa'">Mapa</button></td>
<td>Has visto esta pagina 

<?php

$fp=fopen("counter.txt", "r+");
$counter=fgets($fp, 7);
echo $counter;
$counter++;
rewind($fp);
fputs($fp, $counter);
fclose($fp);

?>
 veces</td>
</tr>
</table>

</p>

<h1 align="center">Manejamos los siguientes jets:</h1>
<hr size="4" color="#BF9BB4">

<form action="cotizacion.php" method="post">

<table align="center" cellpadding="20">
<tr>
<td>
	<img src="avion2.jpg" width="280" height="180"><br>
	<h4 color="#4E6B9E">Gulfstream G550 – 12.501 km</h4>
	El Gulfstream G550 tiene un alcance de 12.501 km. Es el jet ejecutivo con el mayor nivel de sofisticación del mercado. Con él, es posible viajar desde Brasil a Estados Unidos o Europa, en una cabina que combina lujo y productividad. Hay cuatro secciones internas distintas, con capacidad para 18 pasajeros, que cuentan con un sistema de entretenimiento, centro de bebidas, baño privado, cocina completa, sofá y muchas otras comodidades.</td>
<td>
	<img src="avion3.jpeg" width="280" height="180"><br>
	<h4 color="#4E6B9E">Bombardier Global Express – 11.112 km</h4>
	El modelo de Bombardier tiene un perfil aerodinámico y su diseño de ala proporciona un gran alcance sin obstaculizar el funcionamiento en pistas cortas. Así, es posible realizar despegues y aproximaciones a baja velocidad. Acomoda hasta 12 pasajeros, quienes cuentan con mesa plegable, cocina completa, cafetera, luz de lectura y muchos otros beneficios.</td>
<td>
	<img src="avion4.jpg" width="280" height="180"><br>
	<h4 color="#4E6B9E">Bombardier Challenger 604 – 7.452 km</h4>
	Una versión actualizada del Challenger 600, este gran jet canadiense es más eficiente en combustible y tiene motores más potentes. Por lo tanto, es posible no solo ir más lejos, sino también viajar más rápido. Su espaciosa cabina tiene capacidad para 12 pasajeros con una comodidad excepcional. Es uno de los favoritos tanto para viajeros de negocios como de placer.</td>

</tr>

<tr>
	<td>Seleccionar: <input type="radio" name="radio" value="1"></td>
	<td>Seleccionar: <input type="radio" name="radio" value="2"></td>
	<td>Seleccionar: <input type="radio" name="radio" value="3"></td>
</tr>

<tr>
<td>
	<img src="avion1.jpg" width="280" height="180"><br>
	<h4 color="#4E6B9E">Embraer Legacy 650 – 7.223 km</h4>
	El Legacy 650 es la respuesta cuando la misión requiere comodidad y distancia. Considerado el mejor producto de Embraer, con una cocina lista para satisfacer hasta los paladares más peculiares. Tiene capacidad para 13 pasajeros, en una cabina que puede convertirse en lo que tú quieras que sea: una oficina de vuelo, un club o un centro de recreación.</td>
<td>
	<img src="avion7.jpg" width="280" height="180"><br>
	<h4 color="#4E6B9E">Bombardier Challenger 605 – 7,101 km</h4>
	A pesar de ser una actualización en comparación con el 604 antes mencionado, este modelo tiene una autonomía algo menor. Su diferencial es la cabina lujosa y silenciosa, la más amplia de su categoría. Sus ventanas más bajas combinadas con una impresionante altura de techo ofrecen una vista privilegiada para hasta 12 pasajeros. Hay sofás, sillones retráctiles, cocinas completas y más.</td>
<td>
	<img src="avion8.jpeg" width="280" height="180"><br>
	<h4 color="#4E6B9E">Embraer Legacy 600 – 5.955 km</h4>
	Esta versión tiene una autonomía más corta, pero aún tiene una cabina capaz de satisfacer incluso a los clientes más exigentes. Su interior proporciona un viaje extremadamente relajante para hasta 13 pasajeros, que se puede dividir en hasta tres secciones. Además de la cocina completa, con cafetera, hay sofás y grandes mesas, lo que la convierte en una opción ideal para quienes buscan trabajar en sus viajes.</td>
</tr>

<tr>
	<td>Seleccionar: <input type="radio" name="radio" value="4"></td>
	<td>Seleccionar: <input type="radio" name="radio" value="5"></td>
	<td>Seleccionar: <input type="radio" name="radio" value="6"></td>
</tr>

<tr>
<td>
	<img src="avion9.jpg" width="280" height="180"><br>
	<h4 color="#4E6B9E">Bombardier Challenger 300 – 5.800 km</h4>
	La serie 300 estableció el estándar para aviones medianos. Es un avión rápido y cómodo que puede entrar y salir de lugares donde la mayoría de los jets más grandes no pueden operar. Por lo tanto, es ideal para quienes buscan una mayor flexibilidad en los planes. Será más fácil organizar esa escapada de fin de semana, por ejemplo, llevando a los pasajeros lo más cerca posible de su destino. Su espaciosa cabaña tiene capacidad para ocho personas y está equipada con una cocina y un baño privado.</td>
<td>
	<img src="avion5.jpg" width="280" height="180"><br>
	<h4 color="#4E6B9E">Cessna Citation Sovereign – 5.800 km</h4>
	Este modelo de Cessna es reciente y se encuentra entre los principales del segmento de jets de tamaño medio, con capacidad para ocho pasajeros en cómodos asientos. Es capaz de aterrizar en pistas cortas de hasta 1,06 km, subir más rápido y volar más lejos que cualquiera de sus competidores. Está equipado con una cocina de lujo, amplios asientos, baño completamente cerrado y sistemas de entretenimiento.</td>
<td>
	<img src="avion6.jpg" width="280" height="180"><br>
	<h4 color="#4E6B9E">Hawker 850XP – 5.018 km</h4>
	Esta es la tercera generación de la popular serie 800. Es un jet grande y cómodo, ideal para viajes de negocios y placer. Tiene una lujosa disposición de asientos tipo club, con asientos ajustables y amplio espacio para los pies. Acomoda hasta nueve pasajeros cómodamente, además de ofrecer una cocina y un baño entre otros beneficios.</td>
</tr>

<tr>
	<td>Seleccionar: <input type="radio" name="radio" value="7"></td>
	<td>Seleccionar: <input type="radio" name="radio" value="8"></td>
	<td>Seleccionar: <input type="radio" name="radio" value="9"></td>
</tr>

</table>

<hr size="4" color="#BF9BB4">
<h1 align="center">Mapa:</h1>

<p align="center" id="mapa">

	<img src="mapa.jpg "width="800" height="470">
	<table cellpadding="10">
	<tr>
		<td>Local: <input type="radio" name="radio2" value="1"></td>
		<td>Nacional: <input type="radio" name="radio2" value="2"></td>
		<td>Mundial: <input type="radio" name="radio2" value="3"></td>
	</tr>
	</table>
</p>

<p align="center">
	<input class="BOTONES" type="submit" name="submit" value="Agregar los servicios para cotización">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="BOTONES" type="reset" value="Borrar servicios seleccionados">

</p>

</form>

<hr size="4" color="#BF9BB4">

<p class="MENU" style="margin: 0;">

<table align="center" cellpadding="10">
<tr>
	<td><a href="index.php"><img src="MR.png" width="150" height="85"></a></td>
	<td><h2 style="margin: 0;">Contactanos: 442 583 6078 | 442 519 6600</h2></td>
</tr>
<tr>
	<td>Equipo: Bautista Hernandez Roberto David y Aguilar Granados Maria José</td>
</tr>
</table>

</p>

</body>

</html>