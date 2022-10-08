<?php include("db.php"); 

$iden=$_POST['iden'];
$nom=$_POST['nom'];
$fecha=$_POST['fecha'];
$papa=$_POST['papa'];

$query="UPDATE estudiante SET nombre='$nom', fechaNacimiento='$fecha', PAPA='$papa' WHERE id='$iden'";
$result=mysqli_query($conn,$query);

if($query){
    header("Location:index.php");
}
?>