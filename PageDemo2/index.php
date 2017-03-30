<?php
/**
 * Created by PhpStorm.
 * User: malei
 * Date: 2017/3/30
 * Time: 15:42
 */
include 'conn.php'; //引入数据库操作类
$conn=new conn();  //实例化数据库操作类
$total=$conn->getOne("select count(1) as total from food");
$total=$total['total']; //goods表数据总数据条数
$pageSize=6; //每页显示条数
$totalPage=ceil($total/$pageSize);  //计算页数
if(isset($_GET['page']) && $_GET['page']<=$totalPage){//这里做了一个判断，若get到数据并且该数据小于总页数情况下才付给当前页参数，否则跳转到第一页
    $thisPage=$_GET['page'];
}else{
    $thisPage=1;
}
$startPage = ($thisPage-1)*$pageSize;
//<BR>//注意下面sql语句中红色部分，通过计算来确定从第几条数据开始取出，当前页数减去1后再乘以每页显示数据条数
$sql="select id,title,pic from food order by id asc limit $startPage,$pageSize";
$data=$conn->getAll($sql);
?>
<div id="header">
    <div id="logo"><h3><a href="#" title="首页">PHP分页</a></h3></div>
</div>
<div id="main">
    <div id="list">
        <ul>
            <?php
                foreach($data as $k=>$v){
                    //echo '<li><a href=\'#\'><img src='.$v['pic'].'>'.$v['title'].'</li>';
                    echo "<li><a href='#'><img src='".$v['pic']."'>".$v['title']."</a></li>";
                }
            ?>
        </ul>
    </div>
    <div id="pagecount">
        <?php
            //页码大于最大页数
            if($thisPage>$totalPage) $thisPage=$totalPage;
            //页码小于1
            if($thisPage<1) $thisPage=1;
            echo "<span>共".$totalPage."条</span><span>".$thisPage."/".$totalPage."</span>";
            //如果是第一页
            if($thisPage==1){
                echo "<span>首页</span><span>上一页</span>";
            }else{
                echo "<span><a href='?page=1'>首页</a></span><span><a href='?page=".($thisPage-1)."'>上一页</a></span>";
            }
            //如果是最后页
            if($thisPage>=$totalPage){
                echo "<span>下一页</span><span>尾页</span>";
            }else{
                echo "<span><a href='?page=".($thisPage+1)."'>下一页</a></span><span><a href='?page=".($totalPage)."'>尾页</a></span>";
            }
            //<BR> //显示分页数字列表
            //for($i=1;$i<=$totalpage;$i++){
            //   echo '<a href="?page='.$i.'">'.$i.'</a> ';
            //}
        ?>
    </div>
</div>
<div id="footer">
    <p>PHP add by malei</p>
</div>
<style type="text/css">
    #list{ height:530px; margin:50px auto 2px auto; position:relative;display:block;}
    #list ul li{ float:left;width:220px; height:260px; margin:2px; list-style:none;}
    #list ul li img{width:220px; height:220px}
    #list ul li p{line-height:22px}
    #pagecount{width:500px; margin:10px auto 2px auto; padding-bottom:20px; text-align:center}
    #pagecount span{margin:4px; font-size:14px}
    #list ul li#loading{width:120px; height:32px; line-height:32px; border:1px solid #d3d3d3; position:absolute; top:35%; left:42%; text-align:center; background:#f7f7f7 url(loading.gif) no-repeat 8px 8px;-moz-box-shadow:1px 1px 2px rgba(0,0,0,.2); -webkit-box-shadow:1px 1px 2px rgba(0,0,0,.2); box-shadow:1px 1px 2px rgba(0,0,0,.2);}
    #footer{text-align:center;}
</style>
