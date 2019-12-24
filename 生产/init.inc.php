<?php 
     try {
        //创建对象
        $pdo = new PDO("mysql:host=localhost;dbname=saber", "root", "");
        //设置错误使用异常的模式
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo -> query("set names utf8");
    }catch(PDOException $e) {
        echo "数据库连接失败：".$e->getMessage();
        exit;
    }
    //使
    ?>