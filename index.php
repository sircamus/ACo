<?php
session_start();  
require ('config.php');
require ('classes/Messages.php');
require ('classes/Bootstrap.php');
require ('classes/Controller.php');
require ('classes/Model.php');

require ('controllers/home.php');
require ('controllers/planes.php');
require ('controllers/contacto.php');
require ('controllers/conocenos.php');
require ('controllers/servicios.php');

require ('models/home.php');
require ('models/planes.php');
require ('models/contacto.php');
require ('models/conocenos.php');
require ('models/servicios.php');


$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if ($controller) {
	$controller->executeAction();
}
?>