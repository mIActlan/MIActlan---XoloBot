<?php 

$botonMichoacan="botonMichoacan";
$botonCDMX="botonCDMX";
$botonOaxaca="botonOaxaca";

if(isset($_POST['botonMichoacan']))$boton=$_POST['botonMichoacan'];
if(isset($_POST['botonCDMX']))$boton=$_POST['botonCDMX'];
if(isset($_POST['botonOaxaca']))$boton=$_POST['botonOaxaca'];


if($botonMichoacan)
{
	echo 			'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60167.6084471075!2d-101.64228545575003!3d19.521187778163043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d96a8b8d6ae39%3A0xe95695f886f1b1ca!2sP%C3%A1tzcuaro%2C%20Mich.!5e0!3m2!1ses-419!2smx!4v1604833030163!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
}
elseif($botonCDMX)
{
	echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d481726.88754276774!2d-99.42381495030907!3d19.391166835973525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce0026db097507%3A0x54061076265ee841!2sCiudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1604833304863!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
}
elseif($botonOaxaca)
{
	echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122042.24321447733!2d-96.80577252345118!3d17.08145017647104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c72249df26d9b1%3A0xac88a77657dffc3b!2sOaxaca%20de%20Ju%C3%A1rez%2C%20Oax.!5e0!3m2!1ses-419!2smx!4v1604839037237!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
}
?>

