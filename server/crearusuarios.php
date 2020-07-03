<?php 
require('../server/lib.php');

$con = new ConectorBD();

if ($con->initConexion()=='OK'){
    $datos['nombres'] = "'Jonathan Avila'";
    $datos['correo'] = "'jonathan.joan.avila@gmail.com'";
    $datos['password'] = "'".password_hash("12345",PASSWORD_DEFAULT)."'";
    $datos['fecnac'] = "'27/08/1986'";

    if ($con->insertData('usuarios', $datos)) {
      echo "Se han registrado los datos correctamente";
    }else echo "Se ha producido un error en la actualización";

    $datos['nombres'] = "'Cecilia Carreño'";
    $datos['correo'] = "'ceciliaco_71@gmail.com'";
    $datos['password'] = "'".password_hash("12345",PASSWORD_DEFAULT)."'";
    $datos['fecnac'] = "'04/12/1987'";

    if ($con->insertData('usuarios', $datos)) {
      echo "Se han registrado los datos correctamente";
    }else echo "Se ha producido un error en la actualización";

    $con->cerrarConexion();
}else {
    echo "Se presentó un error en la conexión";
}

?>