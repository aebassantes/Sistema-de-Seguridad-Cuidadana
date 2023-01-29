<?php
$Reportar = "";
$Denunciar = "";
$Alertar = "";

if(isset($_POST['Reportar']))$Reportar= $_POST['Reportar'];
if(isset($_POST['Denunciar']))$Denunciar= $_POST['Denunciar'];
if(isset($_POST['Alertar']))$Alertar= $_POST['Alertar'];

if($Reportar){
    echo "Usted a pulsado el botón para hacer reportes";
}
if($Denunciar){
    echo "Usted a pulsado el botón para hacer denuncias";
}
if($Alertar){
    echo "Usted a pulsado el botón para alertas";
}
?>

<input type="text">