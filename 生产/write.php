<?php 
    include "init.inc.php";
    //使用echo $_FILES;获取需要的前端传来的信息
    /*
    **  Array ( [picture] => Array ( [name] => Chrysanthemum.jpg [type] => image/jpeg [tmp_name] => /tmp/php7afmMd [error] => 0 [size] => 879394 ) )
    */

    $pdoState = $pdo->prepare("insert into images(mimetype, data) values(?, ?)");
    $pdoState->bindParam(1, $_FILES['picture']['type']);
    $fp = fopen($_FILES['picture']['tmp_name'], "rb");
    $pdoState->bindParam(2, $fp, PDO::PARAM_LOB);

    $pdoState->execute();
    fclose($fp);
 ?>
