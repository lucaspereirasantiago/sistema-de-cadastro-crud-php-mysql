<?php
    $sql = "SELECT * FROM usuarios";

    $res = $connect->query($sql);

    $qtd = $res->num_rows;

    $row = $res->fetch_object();
?>