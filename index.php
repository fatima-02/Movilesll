<?php
if(isset($_GET["controller"])&& isset($_GET["action"])){
    $controller = $_GET["controller"]; //valor que se recibe en el controller
    $action = $_GET["action"];

    $controller = $controller . "Controller";
    require_once("Controller/".$controller.".php");
    $instance = new $controller();
    $instance->{$action}();
}else{
	echo "Error en peticion";
}
?>