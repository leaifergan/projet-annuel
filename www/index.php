<?php
namespace App;


use App\Core\Routing; 
use App\Core\ConstantManager; 

require "Autoloader.php";
Autoloader::register();

new ConstantManager();


$uriExploded = explode("?", $_SERVER["REQUEST_URI"]);
//  /ajout-d-un-utilisateur
$uri = $uriExploded[0];

$route = new Routing($uri);
$c = $route->getController();
$a = $route->getAction();

$cWithNamespace = $route->getControllerWithNamespace();




//Appeler le bon controller et la bonne action en fonction de $c et $a
//et en faisant les bonnes vérifications

if( file_exists("./Controllers/".$c.".php")){

	include "./Controllers/".$c.".php";

	if(class_exists($cWithNamespace)){
		//$c = App\Security // User
		$cObject = new $cWithNamespace();

		if(method_exists($cObject, $a)){
			//$a = loginAction // defaultAction
			$cObject->$a();
		}else{
			die("L'action ".$a." n'existe pas");
		}

	}else{
		die("La classe ".$c." n'existe pas");
	}

}else{
	die("Le fichier ".$c." n'existe pas");
}

