<?php

    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
          $nome = $_POST["nome"];
          $nome_usuario = $_POST["nome_usuario"];
          $email = $_POST["email"];
          $senha = md5($_POST["senha"]);
          $data_nasc = $_POST["data_nasc"];

          $sql = "INSERT INTO usuarios (nome, nome_usuario, email, senha, data_nasc)
          VALUES ('{$nome}','{$nome_usuario}','{$email}','{$senha}','{$data_nasc}')";

          $res = $conn->query($sql);
        break;
        case 'editar':
            # code...
        break;
        case 'excluir':
            # code...
        break;
    }
?>