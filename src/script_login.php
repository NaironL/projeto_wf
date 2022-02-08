<?php

session_start();

$usuarioAutenticado = false;
$usuarioAdmin = false;
$_SESSION = ['autenticado'];
$_SESSION = ['user_name'];
$msg = 'Seja bem-vindo professor';
$msg1 = 'Seja bem-vindo desenvolvedor';
$usuarios = [
    'Nairon' => [
        'admin' => 'sim',
        'user' => 'nairon',
        'senha' => '123'
    ],
    'Wantuil' => [
        'admin' => 'sim',
        'user' => 'teste',
        'senha' => '123'
    ],

];


    foreach($usuarios as $user => $key){
        if($key['user'] == $_POST['user'] && $key['senha'] == $_POST['senha'] && $key['admin'] == 'sim'){
            $usuarioAutenticado = true;
            $usuarioAdmin = true;
            $_SESSION['user_name'] = $user;
            if ($_SESSION['user_name'] == 'Nairon') {
                $_SESSION['notice'] = $msg1;
            }else {
                $_SESSION['notice'] = $msg;
            }
        } elseif($key['user'] == $_POST['user'] && $key['senha'] == $_POST['senha']) {
            $usuarioAutenticado = true;
            $_SESSION['user_name'] = $user;
            $_SESSION['notice'] = $msg;
        }
    }
    if($usuarioAutenticado && $usuarioAdmin){
        header('Location: ../index.php');

    } elseif ($usuarioAutenticado) {
        header("Location: ../index.php");

    }

else {
    unset ($_SESSION['user_name']);
    header('Location: login.php?login=erro');
}
