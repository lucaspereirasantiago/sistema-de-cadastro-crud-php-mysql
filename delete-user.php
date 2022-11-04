<?php
    include_once("config/connect.php");
    include_once("config/filter.php");

    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];

    $res = $connect->query($sql);

    $row = $res->fetch_object();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title = print "Excluir usuário - Cadastro.com" ?></title>

    <!--===== Bootstrap CSS CDN =====-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <!--===== Bootstrap Icons CDN =====-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!--===== Bootstrap Scripts CDN =====-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!--===== Arquivo CSS local =====-->
    <link rel="stylesheet" href="css/my_styles.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 id="delH1">Tem Certeza?</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p id="delP">Essa ação não poderá ser desfeita!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="config/actions.php" method="post">
                    <input type="hidden" name="acao" value="excluir">
                    <input type="hidden" name="id" value="<?php print $row->id ?>">
                    <button type="submit" class="btn btn-danger" id="del-btn">Excluir</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p id="delA"><a href="views.php?file=users">Voltar</a></p>
            </div>
        </div>
    </div>
</body>
</html>