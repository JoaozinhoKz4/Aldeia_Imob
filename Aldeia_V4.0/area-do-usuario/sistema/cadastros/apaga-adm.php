<?php

    require_once('../conecta_db.php');
    if (!isset($_SESSION)) session_start();
    
    $id =  $_GET['id'];


    $sql = "DELETE FROM `user` WHERE `id_user` = $id";
    //echo $sql;
    $query = mysqli_query($conn, $sql);

    header("Location: ../../administracao/cadastrar-usuario/");

    ?>