<?php
    $alert = print "Preencha o campo!";

    # Nome completo:
    if(isset($_POST["nome"])){
        if(strlen($_POST["nome"]) == 0){
            print $alert;
        }
    }

    # Nome de usuário:
    if(isset($_POST["nome_usuario"])){
        if(strlen($_POST["nome_usuario"]) == 0){
            print $alert;
        }
    }
    # Email:
    if(isset($_POST["email"])){
        if(strlen($_POST["email"]) == 0){
            print $alert;
        }
    }
    # Senha:
    if(isset($_POST["senha"])){
        if(strlen($_POST["senha"]) == 0){
            print $alert;
        }
    }
?>