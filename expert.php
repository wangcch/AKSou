<?php
/**
 * Created by PhpStorm.
 * User: DEMON
 * Date: 2017/6/12
 * Time: 19:56
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AKSou</title>
    <link rel="stylesheet" href="css/expert.css">
    <script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
<div class="head">
    <img src="img/ak.png"/>
    <div class="nav">
        <span class="tlt"><b>高级搜索</b></span>
        <span><a href="index.php">返回主页</a></span>
    </div>
    <div class="clean"></div>
</div>

<div class="table">
    <form action="show2.php" method="post">
        <div class="s-list bgColor">
            <div class="l1">
                <span><b>姓名关键字</b></span>
            </div>
            <div class="l2">
                <input type="text" name="name-keyword" id="name-keyword">
            </div>
            <div class="clean"></div>
        </div>
        <div class="s-list">
            <div class="l1">
                <span><b>学院</b></span>
            </div>
            <div class="l2">
                <select class="collage-select" name="collage-select" id="collage-select">
                    <option value="null">请选择</option>
                    <option value="xw">信息与网络工程学院</option>
                    <option value="dq">电气与电子工程学院</option>
                    <option value="hc">化学与材料工程学院</option>
                    <option value="zh">资源与环境学院</option>
                    <option value="jx">机械工程学院</option>
                    <option value="sy">食品药品学院</option>
                    <option value="sk">生命科学学院</option>
                    <option value="dk">动物科学学院</option>
                    <option value="wy">外国语学院</option>
                    <option value="rw">人文学院</option>
                    <option value="cj">财经学院</option>
                    <option value="gl">管理学院</option>
                    <option value="jz">建筑学院</option>
                    <option value="nx">农学院</option>
                </select>
            </div>
            <div class="clean"></div>
        </div>
        <div class="s-list bgColor">
            <div class="l1">
                <span><b>班级</b></span>
            </div>
            <div class="l2">
                <input type="text" name="class" id="class">
            </div>
            <div class="clean"></div>
        </div>
        <div class="s-list">
            <div class="l1">
                <span><b>性别</b></span>
            </div>
            <div class="l2">
                <select class="sex-select" name="sex-select" id="sex-select">
                    <option value="null">请选择</option>
                    <option value="1">男</option>
                    <option value="0">女</option>
                </select>
            </div>
            <div class="clean"></div>
        </div>
        <div class="s-list bgColor">
            <div class="l1">
                <span><b>年级</b></span>
            </div>
            <div class="l2">
                <select class="grade-select" name="grade-select" id="grade-select">
                    <option value="null">请选择</option>
                    <option value="g3">2013</option>
                    <option value="g4">2014</option>
                    <option value="g5">2015</option>
                    <option value="g6">2016</option>
                </select>
            </div>
            <div class="clean"></div>
        </div>

        <div class="sub">
            <input type="submit" class="btn" value="搜索">
            <input type="reset" class="btn reset" value="重置">
        </div>
    </form>
</div>

</body>
</html>
