<?php
$host="localhost";
$db_user="root";
$db_pass="123456";
$db_name="test";
$timezone="Asia/Shanghai";

$mysqli= mysqli_connect($host,$db_user,$db_pass,$db_name);
//判断是否连接成功
if(!$mysqli){
    echo mysqli_connect_error();
}
//设置编码
$mysqli->set_charset("utf8");//或者 $mysqli->query("set names 'utf8'")
?>
