<html>

<head>
<title>Aerolinea (Iniciar Sesión)</title>

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

form{
text-align: center;
}

.MENU{

	background-color: #97B2E4;
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
	<td><button class="BOTONES" onclick="location.href='index.php'">Volver al Menú</button></td>
</tr>
</table>

</p>

<h1 align="center">Iniciar sesión</h1>
<h4 align="center">lista nombres (prueba): 1.Roberto 2.Majo 3.Julian 4.Alex 5.Karla</h4>
<h4 align="center">lista contraseñas (prueba): 1.1234 2.5678 3.9101 4.1121 5.3141</h4>

<hr size="4" color="#BF9BB4">

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<br><br>
Nombre: <input type="text" name="nom"><br><br>
Contraseña <input type="password" name="contra"><br><br>
<input type="submit" name="submit" value="Iniciar sesión" class="BOTONES">
<br><br><br>
</form>

<p align="center">
<?php

if(isset($_POST['submit'])){

$nom=$_POST['nom'];
$clave=array('1234','5678','9101','1121','3141');

if($nom=="Roberto" && $clave[0]==$_POST['contra']){

$fp=fopen("contador.txt", "r+");
$n=fgets($fp, 7);
$n=1;
rewind($fp);
fputs($fp, $n);
fclose($fp);

echo "Hola roberto";
}
if($nom=="Majo" && $clave[1]==$_POST['contra']){
echo "Hola Majo";

$fp=fopen("contador.txt", "r+");
$n=fgets($fp, 7);
$n=2;
rewind($fp);
fputs($fp, $n);
fclose($fp);
}
if($nom=="Julian" && $clave[2]==$_POST['contra']){
echo "Hola Julian";

$fp=fopen("contador.txt", "r+");
$n=fgets($fp, 7);
$n=3;
rewind($fp);
fputs($fp, $n);
fclose($fp);
}
if($nom=="Alex" && $clave[3]==$_POST['contra']){
echo "Hola Alex";

$fp=fopen("contador.txt", "r+");
$n=fgets($fp, 7);
$n=4;
rewind($fp);
fputs($fp, $n);
fclose($fp);
}
if($nom=="Karla" && $clave[4]==$_POST['contra']){
echo "Hola Karla";

$fp=fopen("contador.txt", "r+");
$n=fgets($fp, 7);
$n=5;
rewind($fp);
fputs($fp, $n);
fclose($fp);
}

if($nom!="Robero" && $nom!="Majo" && $nom!="Julian" && $nom!="Alex" && $nom!="Karla"){

	if ($clave[0]!=$_POST['contra'] && $clave[1]!=$_POST['contra'] && $clave[2]!=$_POST['contra'] && $clave[3]!=$_POST['contra'] && 
		$clave[4]!=$_POST['contra']) {
			echo "Ese usuario no existe.";
	}
}

}

?>
</p><br><br>

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