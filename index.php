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
</head>
<body>
<header>

</header>
<div class="container center">

    <div class="tlt">
        <img src="img/ak.png">
        <script src="http://ajax.microsoft.com/ajax/jQuery/jquery-1.7.2.min.js"></script>
        <script>
            $('img').bind("contextmenu", function(e){ return false; })
        </script>
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

            <p><a href="">高级搜索</a></p>
        </form>

        <div class="suggest" id="search-suggest" style="display: none">
            <ul>
                <li>demo1</li>
                <li>demo2</li>
            </ul>
        </div>
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script>
            $('#search-input').bind('keyup', function () {
                $('#search-suggest').show().css({
                    top: $('#search-input').offset().top + $('#search-input').height + 10,
                    left: $('#search-input').offset().left
                });
            })
        </script>
    </div>




</div>
<footer>

</footer>
</body>
</html>
