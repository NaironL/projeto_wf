<?php
    session_start();
?>

    <?php
    if(isset($_FILES['pic']))
    {
        $ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
        $new_name = $_FILES['pic']['name']; //Definindo um novo nome para o arquivo
        $dir = '../assets/img/carrossel/'; //Diretório para uploads

        move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    }
