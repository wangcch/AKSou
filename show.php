<?php
require_once 'connect.php';
$select = $_POST['select'];
$str = $_POST['search_str'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>aksou</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>


<div class="container center">



    <div class="search" id="search">

        <form action="show.php" method="post">
            <select class="select" name="select" id="select">
                <option value="id">学号</option>
                <option value="name">姓名</option>
                <option id="class" value="class">班级</option>
            </select>
            <input type="search" name="search_str" id="search-input" class="input" value="<?php echo $str?>" autocomplete="off">
            <input type="submit" class="btn" value="搜索">

            <p><a href="">高级搜索</a></p>
        </form>

    </div>



<table class="tab">
    <tr>
        <th>学号</th>
        <th>姓名</th>
        <th>性别</th>
        <th>班级</th>
        <th>学校</th>
    </tr>

    <?php

    $sql="SELECT id,name,gender,class,school FROM users WHERE ".$select."='{$str}'";
    $rows=$pdo->query($sql);
    if($rows->rowCount()>0) {
        foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['gender']}</td>";
            echo "<td>{$row['class']}</td>";
            echo "<td>{$row['school']}</td>";
            echo "</tr>";
        }
    }else{
        echo "<tr><td colspan='5'>无'{$str}'数据</td></tr>";
    }
    ?>



</table>
    <p>共有<?php echo $rows->rowCount()?>条记录</p>
</div>
</body>
</html>
