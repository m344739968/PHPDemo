<?php
/**
 * Created by PhpStorm.
 * User: malei
 * Date: 2017/3/30
 * Time: 15:38
 */
/*
*配置数据库信息
*/
$dbms='mysql';       //数据库类型
$host='localhost';  //数据库主机名
$dbName='test';      //使用的数据库
$user='root';        //数据库连接用户名
$pass='123456';      //对应的密码
$dsn="$dbms:host=$host;dbname=$dbName";
define("dsn",$dsn);
define("user",$user);
define("pass",$pass);
?>