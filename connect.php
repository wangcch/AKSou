<?php
/**
 * Created by PhpStorm.
 * User: DEMON
 * Date: 2017/6/3
 * Time: 17:28
 */
try{
    $pdo = new PDO('mysql:host=localhost;dbname=ahstu','root','root');
}catch (PDOException $e){
    die("连接失败".$e->getMessage());
}
