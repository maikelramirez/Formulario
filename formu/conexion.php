<?php
$servidor="localhost";
$usuario="root";
$password="";
$basedatos="formuu";

$conexion= new mysqli($servidor,$usuario,$password,$basedatos);

if($conexion->connect_error){

    die("error de conexion".$conexion->connect_error);

}

echo "conexion establecida...";

if($_POST){

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $contacto=$_POST['contacto'];
    $stmt=$conexion->prepare("INSERT INTO usuarios (id,nombre,apellido,contacto) values (null,?,?,?)");
    $stmt->bind_param("sss",$nombre,$apellido,$contacto);
    $stmt->execute();
    echo "se ha insertado los registros con exito";

}

if($_GET){

    $id=$_GET['id'];
    $stmt=$conexion->prepare("DELETE FROM usuarios WHERE id=?");
    $stmt->bind_param("s", $id);
    $stmt->execute();



}





$sql="SELECT *FROM usuarios order by id asc";
$resultado=$conexion->query($sql);
$datos=$resultado->fetch_all();

?>