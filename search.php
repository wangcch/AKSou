<?php
/**
 * Created by PhpStorm.
 * User: DEMON
 * Date: 2017/6/7
 * Time: 10:49
 */
require_once 'connect.php';
$str=$_POST['str'];
$sql="SELECT DISTINCT class FROM users WHERE class LIKE '%{$str}%'";
$rows=$pdo->query($sql);
//echo $sql."<br>";
//var_dump($rows);
if ($rows->rowCount()>0) {
    foreach ($rows as $row) {
        echo "<li>".$row['class']."</li>";
    }
}else{
    echo "<li>".'无结果'."</li>";
}