<?php 
require_once './Controller/UsuarioController.php';
echo "realizado correctamente<br><br>"; 

echo "================ RECUPERACIÓN TODOS USUARIOS ======================<br>";
$usuarios = UsuarioController::recuperarUsuarios();
foreach ($usuarios as $usu){
    echo $usu->nombre . " " . $usu->email . "<br>";
}
echo "================ RECUPERACIÓN USUARIO EMAIL ======================<br>";
$usuario = UsuarioController::buscarPorCorreo("j.can.rui.est@iesmarquesdecomares.org");
echo $usuario->nombre . "<br>";

echo "================ COMPROBACIÓN USUARIO ======================<br>";
$us = UsuarioController::comprobarUsuario("aaa@aaa.com","1234");
echo $us->nombre . " " . $us->rol . " " . $us->id;



?>
