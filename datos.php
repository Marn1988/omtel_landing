<?php 
// recibe datos de formulario
//include 'conect.php'; // incluye php de conexion a bd
$conexion = mysqli_connect("localhost","root","","db_formulario","3306") or die("error conectando con el servidor");
if(!$conexion){
echo "Error al conectar a la base de datos";
}


$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$calles = $_POST["calles"];
$numero_puerta = $_POST["numero_puerta"];
$ciudad = $_POST["ciudad"];
// envia datos a la base de datos

$insert=  "INSERT INTO formulario(nombre,telefono,calles,numero_puerta,ciudad) 
VALUES ('$nombre','$telefono','$calles','$numero_puerta','$ciudad') " ;

//ejecutar consulta

$resultado= mysqli_query($conexion,$insert);

/*if(!$resultado){
    echo "error en el registro";
}
else{
    echo "lísto tu registro esta completo";
}*/
//cerrar conexion
mysqli_close($conexion);
