<?
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once($_SERVER["DOCUMENT_ROOT"]."/admin/backend/config.php");

$timezone = new DateTimeZone('America/Mexico_City');
$fecha = new DateTime('now', $timezone);
$fechaFormateada = $fecha->format('Y-m-d H:i:s');

setlocale(LC_ALL, 'es_MX');
$mesr = $fecha->format('m');
$year = $fecha->format('Y');



if (isset($_POST['submit'])) {

$mail = $_POST['mail'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$tel = $_POST['tel'];
$direccion = $_POST['dir'];
$menu = $_POST['menu'];
$alergias = $_POST['alergias'];
$servicio = $_POST['servicio'];
$fecha = $_POST['fecha'];
$fechaEnvio = date('Y-m-d H:i:s');

if($codigo_de_error == "0"){
$sql= "INSERT INTO usuarios(correo,nombre, apellido, tel,direccion,menu,alergias,servicio,fecha,fechaEnvio)
VALUES('$mail','$nombre','$apellido','$tel','$direccion','$menu','$alergias','$servicio','$fecha','$fechaEnvio')";

    // Ejecutar la consulta
    if ($conn->query($sql) === true) {

     header('location: /?msj='. $codigo_de_error);
    } else {
        header('location: /?msj=2');
    }
}else {
    // Hubo un error 
    echo "Hubo problemas al guardar datos.";
}


}


$conn->close();
?>