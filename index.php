<?php
    include("config/connect.php");
    include("config/validation.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro.com - Faça seu cadastro agora!</title>

    <!--===== Bootstrap CSS CDN =====-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <!--===== Bootstrap Icons CDN =====-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!--===== Bootstrap Scripts CDN =====-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!--===== Arquivo CSS local =====-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="col" id="block-logo">
             <img id="logo" src="img/databaseicon.png" alt="">
             <h1 id="title">Cadastro.com</h1>
        </div>
        <div class="col" id=form>
            <form action="" method="post">
                <input type="hidden" name="acao" value="cadastrar">
                <div class="col-md-6" id=input>
                    <label>Nome completo</label>
                    <input type="text" name="nome" class="form-control">
                </div>
                <div class="col-md-6" id=input>
                    <label>Nome de usuário</label>
                    <input type="text" name="nome_usuario" class="form-control">
                </div>
                <div class="col-md-6" id=input>
                    <label>E-mail</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="col-md-6" id=input>
                    <label>Senha</label>
                    <input type="password" name="senha" class="form-control">
                </div>
                <div class="col-md-6" id=input>
                    <label>Data de Nascimento</label>
                    <input type="date" name="data_nasc" class="form-control">
                </div>
                <div class="col-md-6" id=input>
                    <input type="checkbox" name="" id="" required>
                    <label>Concordo com os <b><a href="terms-of-use.php">Termos de Uso</a></b> de Cadastro.com</label>
                </div>
                <div class="col-md-6" id=btn-primary>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
        <div class="col" id="adm">
            <button class="btn btn-success" id="adm-btn"><a id="adm-title" href="pages/users.php">Administrar Usuários</a></button>
        </div>
    </div>
</body>
</html>