<?php
$host="localhost";
$bd="sitio";
$usuario="root";
$contraseña="";

try {
        $conexion=new PDO ("mysql:host=$host;dbname=$bd",$usuario,$contraseña);
        if ($conexion) { print "";}
            
        

}catch (Exception $ex ){

    print $ex->getMessage(); 

}
?>