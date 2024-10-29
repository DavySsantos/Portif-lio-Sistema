<?php 

include  __DIR__ . '/vendor/autoload.php';

use App\Entity\Usuario;

if(isset($_POST['email'], $_POST['senha'])){
    $values = [0 => "email = '{$_POST['email']}'"];
    $usuario = Usuario::obterUsuario($values);

    if ($usuario instanceof Usuario) {
        if($usuario->email == $_POST['email'] && password_verify($_POST['senha'], $usuario->senha)){
            header('Location: homepage.php');
        } else {
            header('Location: index.php?status=error');
        }
    } else {
        header('Location: index.php?status=error');
    }

} 


include __DIR__ . '/login.php';
