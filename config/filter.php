<?php
    #to the listing in users.php

    $sql = "SELECT * FROM usuarios";

    $res = $connect->query($sql);

    $qtd = $res->num_rows;
?>