<html>

<head>
<title>Aerolinea MR (Cotización)</title>

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

button{
	font-family: Comic Sans MS, cursive;
	font-size: 20;
	height: 30;
	border: #BF9BB4 3px solid;
}

.MENU{

	background-color: #97B2E4;
}

.TABLA td{
border: #4E6B9E 3px solid;
}

</style>
<meta charset="UTF-8">
</head>

<body>

<p class="MENU">

<table align="center" cellpadding="10">
<tr>
	<td><a href="index.php"><img src="MR.png" width="150" height="85"></a></td>
	<td><h2 style="margin: 0;">Aerolineas MR</h2></td>
	<td><button onclick="location.href='index.php'">Volver al Menú</button></td>
</tr>
</table>

</p>

<h1 align="center">Precios</h1>

<hr size="4" color="#BF9BB4">

<table class="TABLA" align="center" cellpadding="10">
	<caption>Aviones</caption>
	<tr>
		<td>Gulfstream G550 – 12.501 km</td>
		<td>Bombardier Global Express – 11.112 km</td>
		<td>Bombardier Challenger 604 – 7.452 km</td>
		<td>Embraer Legacy 650 – 7.223 km</td>
		<td>Bombardier Challenger 605 – 7,101 km</td>
		<td>Embraer Legacy 600 – 5.955 km</td>
		<td>Bombardier Challenger 300 – 5.800 km</td>
		<td>Cessna Citation Sovereign – 5.800 km</td>
		<td>Hawker 850XP – 5.018 km</td>
	</tr>

	<tr>
		<td>$12,500</td>
		<td>$12,000</td>
		<td>$8,500</td>
		<td>$7,500</td>
		<td>$7,200</td>
		<td>$6,000</td>
		<td>$5,900</td>
		<td>$5,900</td>
		<td>$5,000</td>
	</tr>
</table><br>

<table class="TABLA" align="center" cellpadding="10">
	<caption>Vuelos</caption>
	<tr>
		<td>Local</td>
		<td>Nacional</td>
		<td>Mundial</td>
	</tr>

	<tr>
		<td>$5,000</td>
		<td>$15,000</td>
		<td>$60,000</td>
	</tr>
</table><br>

<hr size="4" color="#BF9BB4">

<?php

$fp=fopen("contador.txt", "r+");
$contador=fgets($fp, 7);
fclose($fp);

if(isset($_POST['submit'])){
if(isset($_POST['radio']) && isset($_POST['radio2'])){

	$n1=$_POST['radio'];
	$n2=$_POST['radio2'];
	$preA=0;
	$preV=0;
 
if($n1==1){
	$preA=12500;
}
if($n1==2){
	$preA=12000;
}
if($n1==3){
	$preA=8500;
}
if($n1==4){
	$preA=7500;
}
if($n1==5){
	$preA=7200;
}
if($n1==6){
	$preA=6000;
}
if($n1==7){
	$preA=5900;
}
if($n1==8){
	$preA=5900;
}
if($n1==9){
	$preA=5000;
}

if($n2==1){
	$preV=5000;
}
if($n2==2){
	$preV=15000;
}
if($n2==3){
	$preV=60000;
}

$Total=$preA+$preV;
echo "<p align=center>El costo total de los servicios seleccionados es de: $".$Total." pesos Méxicanos</p>";

if($contador!=0){
	echo "<p align=center>
<button onclick=location.href='confi.php'>Confirmar pago</button></p>";
}
else{
	echo "<p align=center>Inicia sesión para poder comprar productos</p>";
}


}
}

?>

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