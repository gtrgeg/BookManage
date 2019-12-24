<?php 
    include "init.inc.php";

    $pdoState = $pdo->prepare("select mimetype, data from images where id = ?");
    $pdoState->execute(array(1));
    list($mimetype, $data) = $pdoState->fetch(PDO::FETCH_NUM);
    header("Content-Type:($mimetype)");
    echo $data;
 ?>
