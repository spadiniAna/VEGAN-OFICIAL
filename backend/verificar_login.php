<?php

    include_once 'login.class.php';
    
    if(isset($_POST['email']) && isset($_POST['senha'])){

        $login = new login();

        $login->set_email($_POST['email']);
        $login->set_senha($_POST['senha']);

        if($login->verificar()){

            header('location: ../frontend/pag_inicial.php');

        }else{

            header('location: ../frontend/login.php');

        }

    }

?>