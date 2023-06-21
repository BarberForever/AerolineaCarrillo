<html>

<head>
<title>Aerolinea (Confirmar compra)</title>

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

<h1 align="center">Confirmar el pago</h1>

<hr size="4" color="#BF9BB4">

<form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

Ingrese su email:<input type="text" name="em"><br><br>

Ingrese su ciudad:<select name="ciuda">
	<option value="Ciudad de México">Ciudad de México</option>
	<option value="Guadalajara">Guadalajara</option>
	<option value="Monterrey">Monterrey</option>
</select><br><br>

Imagen de quién comtrata el servicio (de frente, sin anteojos o cosas que cubran la cara).
<input type="file" name="archivo"><br><br>

Dejar comentario (opcional): <input type="text" name="com"><br><br>

<input type="submit" name="submit" value="Confirmar compra" class="BOTONES"><br><br>

</form>

<?php

$file="guestbook.txt";
$nombree="";

$fp=fopen("contador.txt", "r+");
$contador=fgets($fp, 7);
fclose($fp);

if($contador==1){
$nombree="Roberto";
}
if($contador==2){
$nombree="Majo";
}
if($contador==3){
$nombree="Julian";
}
if($contador==4){
$nombree="Alex";
}
if($contador==5){
$nombree="Karla";
}

if(isset($_POST['submit']) && $_POST['em']!=""){

$comment=$_POST['com'];
$email=$_POST['em'];
$citi=$_POST['ciuda'];

$fp=fopen($file, "r+");
$old=fread($fp, filesize($file));
$email="<a href='\mailto: '$email\'>$email</a>";
$dateOfentry=date ("y-n-j");
$comment = htmlspecialchars($comment);
$comment = stripslashes($comment);
$entry="<p><b>$nombree</b> ($email) Escribio el: <i>$dateOfentry</i> desde ".$citi.";<br>$comment</p>\n";

if(isset($_FILES['archivo'])){
$nomarchivo=$_FILES['archivo']['name'];
$ruta=$_FILES['archivo']['tmp_name'];
$rutades='C:\xampp\htdocs\Proyecto Aerolinea PHP\_'.$nomarchivo;

if(move_uploaded_file($ruta, $rutades)){

rewind($fp);
fputs($fp, "$entry".'<img src="_'.$nomarchivo.'" width="100" heigth="100">'."\n $old \n");
fclose($fp);

}
else{
echo "Error al subir la imagen"; 
}

}

}
elseif(isset($_POST['submit'])){
	if(is_null(isset($_POST['archivo']))){
	if($_POST['em']==""){

	echo "Llene todos los datos.";
	}
}
else{
echo "Suba la imagen.";
}
}

readfile($file);
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