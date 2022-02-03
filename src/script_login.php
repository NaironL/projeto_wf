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
        header('Location: ../index.php?autenticado=sim');
        $_SESSION['autenticado'] = 'sim';

    } elseif ($usuarioAutenticado) {
        header("Location: ../index.php?autenticado=sim");
        $_SESSION['autenticado'] = 'sim';

    }

else {
    $_SESSION['autenticado'] = 'nao';
    header('Location: login.php?login=erro');
}