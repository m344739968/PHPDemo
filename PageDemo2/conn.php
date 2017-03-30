<?php
/**
 * Created by PhpStorm.
 * User: malei
 * Date: 2017/3/30
 * Time: 15:36
 */
/*
*连接数据库 进行相关查询操作
*/
class conn{
    public function __construct(){
        //将数据库用户名密码等信息写到配置文件config.php里，
        //在在需要引用配置文件内容的文件里用include或require包含进来，
        //并在函数里用global关键字将存放数据库名，密码等的变量全局化，这样就可以在文件里的函数里使用了。
        include_once('config.php');
        try{
            $this->pdo = new PDO(dsn, user, pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->exec('set names utf8');
        }catch(PDOException $e){
            echo '数据库连接失败:'.$e->getMessage();
            exit();
        }
    }
    //获取一行数据
    public function getOne($sql){
        $rs=$this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

        return $rs;
    }
    //获取多行数据结果
    public function getAll($sql){
        $rs=$this->pdo->query($sql)->fetchall(PDO::FETCH_ASSOC);

        return $rs;

    }
}
?>