<?php 
require '../../../conexion_bd.php';
if (isset($_POST['id']) ){
    $id = $_POST['id'];
$sql = "DELETE FROM publicacion WHERE id = $id";
if (mysqli_query($conexion, $sql)){
    header("location: ../main.php");
    exit();
}else {
    echo 'Error al eliminar anuncio'. mysqli_error($conexion);
}
mysqli_close($conexion);
} 
?>