<?php
/**
 * Created by PhpStorm.
 * User: DEMON
 * Date: 2017/6/3
 * Time: 14:25
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AKSou</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script>
        $(function(){
            var myDate = new Date();
            var year = myDate.getYear()+1900;
            $("#year").html(year);
        });
    </script>
</head>
<body>
<header>

</header>
<div class="container center">

    <div class="tlt">
        <img src="img/ak.png">
        <p>不能搜的搜索</p>
    </div>

    <div class="search" id="search">

        <form action="show.php" method="post">
            <select class="select" name="select" id="select">
                <option value="id">学号</option>
                <option value="name">姓名</option>
                <option id="class" value="class">班级</option>
            </select>
            <input type="search" name="search_str" id="search-input" class="input" autocomplete="off">
            <input type="submit" class="btn" value="搜索">

            <p><a href="expert.php">高级搜索</a></p>
        </form>




    </div>

    <footer>
        <p>&copy;2016-<span id="year"></span> <a href="http://theyear.space">THEYEAR</a></p>
    </footer>
</div>

</body>
</html>
