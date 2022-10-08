<?php

include("db.php");

if(isset($_POST['save'])){
    $iden=$_POST['iden'];
    $nom=$_POST['nom'];
    $fecha=$_POST['fecha'];
    $papa=$_POST['papa'];

    $query="INSERT INTO estudiante(id,nombre,fechaNacimiento,PAPA) VALUES($iden,'$nom','$fecha',$papa)";
    $result=mysqli_query($conn,$query);
    if(!$result){
        $_SESSION['mensaje']="No se pudo guardar";
        $_SESSION['tipo_mensaje']="danger";
        //die("Falló la consulta);
    } else{
        $_SESSION['mensaje']="Estudiante guardado";
        $_SESSION['tipo_mensaje']="success";
    }
    header("Location:index.php");
}

?>