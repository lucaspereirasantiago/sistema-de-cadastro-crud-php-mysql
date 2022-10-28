<?php
    include("connect.php");

    $refresh = header("Refresh: 1.0; url=http://localhost/crud-php/index.php");

    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $nome_usuario = $_POST["nome_usuario"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuarios (nome, nome_usuario, email, senha, data_nasc)
            VALUES ('{$nome}', '{$nome_usuario}', '{$email}', '{$senha}', '{$data_nasc}')";
            
            $res = $connect->query($sql);

            if($res == TRUE){
                echo $refresh;
            }
        break;
    }
?>