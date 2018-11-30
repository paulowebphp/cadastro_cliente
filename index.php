<?php 
require 'config/config.php';
require 'app/core/Core.php';
require 'vendor/autoload.php';


$core = new Core;
$core->run();

/*
echo "controller: ". $core->getController();
echo "<br>";
echo "metodo: ". $core->getMetodo();
echo "<br>";
$parametros = $core->getParametros();
foreach ($parametros as $param) {
	# code...
	echo "parametro: ".$param;
	echo "<br>";
}
*/

 ?>