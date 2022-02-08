<?php


   $arquivo = fopen('horarios.wf', 'a');

    $texto = $_POST['dia'] . '#' . $_POST['horario'] . '#' . $_POST['vaga'] . PHP_EOL;

    $dia = str_ireplace('#', '#' , $_POST['dia']);
    $horario = str_ireplace('#', '#' , $_POST['horario']);
    $vaga = str_ireplace('#', '#' , $_POST['vaga']);

    fwrite($arquivo, $texto);
    fclose($arquivo);
    
    header('Location: ../index.php');