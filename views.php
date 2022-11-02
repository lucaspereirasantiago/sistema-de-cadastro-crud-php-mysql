<?php
    include_once("config/connect.php");
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
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>     
    <nav>
        <a href= <?php "{$_GET['file']}.php" ?> ></a>
    </nav>  

    <div>
        <?php
            include("{$_GET['file']}.php");
        ?>
    </div>
</body>
</html>