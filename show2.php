<?php
/**
 * Created by PhpStorm.
 * User: DEMON
 * Date: 2017/6/12
 * Time: 21:46
 */
header("content-type:text/html;charset=utf-8");
require_once 'connect.php';
$keyword=$_POST["name-keyword"];
$collage=$_POST["collage-select"];
$class=$_POST["class"];
$sex=$_POST["sex-select"];
$grade=$_POST["grade-select"];


//echo "$keyword"."<br>";
//echo "$collage"."<br>";
//echo "$class"."<br>";
//echo "$sex"."<br>";
//echo "$grade"."<br>";

switch ($collage){
    case "xw":
        $collage="信息与网络工程学院";
        break;
    case "dq":
        $collage="电气与电子工程学院";
        break;
    case "hc":
        $collage="化学与材料工程学院";
        break;
    case "zh":
        $collage="资源与环境学院";
        break;
    case "jx":
        $collage="机械工程学院";
        break;
    case "sy":
        $collage="食品药品学院";
        break;
    case "sk":
        $collage="生命科学学院";
        break;
    case "dk":
        $collage="动物科学学院";
        break;
    case "wy":
        $collage="外国语学院";
        break;
    case "rw":
        $collage="人文学院";
        break;
    case "cj":
        $collage="财经学院";
        break;
    case "gl":
        $collage="管理学院";
        break;
    case "jz":
        $collage="建筑学院";
        break;
    case "ny":
        $collage="农学院";
        break;
    case "null":
        $collage=null;
}

switch ($sex){
    case "null":
        $sex=null;
        break;
    case "1":
        $sex="男";
        break;
    case "0":
        $sex="女";
        break;

}
switch ($grade){
    case "g3":
        $grade="13";
        break;
    case "g4":
        $grade="14";
        break;
    case "g5":
        $grade="15";
        break;
    case "g6":
        $grade="16";
        break;
    default:
        $grade=null;
}


$sql="SELECT id,name,gender,class,school FROM users WHERE name LIKE '%{$keyword}%' AND school = '{$collage}' AND class LIKE '%{$class}%{$grade}%' AND gender='{$sex}'";
echo "$sql";
$rows=$pdo->query($sql);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AKSou</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>


<div class="container center">

    <table class="tab">
        <tr>
            <th>序号</th>
            <th>学号</th>
            <th>姓名</th>
            <th>性别</th>
            <th>班级</th>
            <th>学校</th>
        </tr>

        <?php
        $time=1;
        if($rows->rowCount()>0) {
            foreach ($rows as $row) {
                echo "<tr>";
                echo "<td>{$time}</td>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['gender']}</td>";
                echo "<td>{$row['class']}</td>";
                echo "<td>{$row['school']}</td>";
                echo "</tr>";
                $time++;
            }
        }else{
            echo "<tr><td colspan='6'>null</td></tr>";
        }
        ?>



    </table>
    <p>共有<?php echo $rows->rowCount()?>条记录</p>
</div>


</body>
</html>
