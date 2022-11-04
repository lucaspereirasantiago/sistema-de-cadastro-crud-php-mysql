<?php
    include_once("config/connect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title = print "Usuários - Cadastro.com" ?></title>

    <!--===== Bootstrap CSS CDN =====-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <!--===== Bootstrap Icons CDN =====-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!--===== Bootstrap Scripts CDN =====-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!--===== Arquivo CSS local =====-->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid" id="navigation">
            <a class="navbar-brand" href="index.php">
                <img src="img/db_icon.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                Cadastro.com
            </a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="views.php?file=index">Tela de Cadastro</a>
                    <a class="nav-link active" aria-current="page" href="views.php?file=users">Administrar Usuários</a>
                </div>
            </div>
        </div>
    </nav>  

    <div class="container" id="table-users">
        <div class="row">
            <div class="col-md-12">
                <?php
                    $sql = "SELECT * FROM usuarios";
                    $res = $connect->query($sql);
                    $qtd = $res->num_rows;

                    if($qtd > 0){
                        echo "<table class='table table-hover table-bordered'>";

                        echo "<thead>";
                            print "<tr class='table-dark'>";
                                print"<th scope='col'>id &#x1f511;</th>";
                                print"<th scope='col'>Nome completo</th>";
                                print"<th scope='col'>Nome de usuário</th>";
                                print"<th scope='col'>E-mail</th>";
                                print"<th scope='col'>Data de nascimento</th>";
                                print"<th scope='col'>Ações</th>";
                            print "</tr>";
                        echo "</thead>";
                        while ($row = $res->fetch_object()){
                        echo "<tr class='table-light'>";

                            print "<td>" . $row->id . "</td>";
                            print "<td>" . $row->nome . "</td>";
                            print "<td>" . $row->nome_usuario . "</td>";
                            print "<td>" . $row->email . "</td>";
                            print "<td>" . $row->data_nasc . "</td>";
                            print
                            "<td>
                                <button onclick=\"location.href='views.php?file=edit-form&id=".$row->id."';\">Editar</button>

                                <button onclick=\"delPopup()\">Excluir</button></a>
                            </td>";

                        echo "</tr>";
                        }

                        echo "</table>";

                    }else{
                        echo "<script>alert('Sem resultados!');</script>";
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="js/scripts.js"></script>
</body>
</html>