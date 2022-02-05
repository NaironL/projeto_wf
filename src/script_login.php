<?php
session_start();
$usuarioAutenticado = false;
$usuarioAdmin = false;
$_SESSION = ['autenticado'];
$_SESSION = ['user_name'];
$usuarios = [
    'Nairon' => [
        'admin' => 'sim',
        'user' => 'nairon',
        'senha' => '123'
    ],
    'Teste' => [
        'admin' => 'nao',
        'user' => 'teste',
        'senha' => '123'
    ],

];


    foreach($usuarios as $user => $key){
        if($key['user'] == $_POST['user'] && $key['senha'] == $_POST['senha'] && $key['admin'] == 'sim'){
            $usuarioAutenticado = true;
            $usuarioAdmin = true;
            $_SESSION['user_name'] = $user;
        } elseif($key['user'] == $_POST['user'] && $key['senha'] == $_POST['senha']) {
            $usuarioAutenticado = true;
            $_SESSION['user_name'] = $user;
        }
    }
    if($usuarioAutenticado && $usuarioAdmin){
        header('Location: ../index.php');
        $_SESSION['user_name'];

    } elseif ($usuarioAutenticado) {
        header("Location: ../index.php");
        $_SESSION['user_name'];

    }

else {
    unset ($_SESSION['user_name']);
    header('Location: login.php?login=erro');
}