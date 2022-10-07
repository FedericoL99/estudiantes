<?php

session_start();

$conn=mysqli_connect(
    'localhost', //ubicacion
    'root', //usuario
    '', //contraseña
    'primerphp' //nombre BD
);

/*
if(isset($conn)){
    echo "BD Conectada";
} else{
    echo "NOOO";
}*/

?>