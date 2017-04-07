<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/28
 * Time: 13:44
 */
//<div>API接口示例</div>
//$id = @$_GET["id"]?$_GET["id"]:0;
//echo $id;
//$arr=array('a'=>1,'b'=>2);
//echo json_encode($arr)
$list=array(
    1001 => array(
        'name'=>'张三1',
        'age'=>28
    ),
    1002=>array(
        'name'=>'李四',
        'age'=>30
    )
);
$one = $list[1001];
//echo json_encode($one);
//echo json_encode($list);
echo "<br/>" ;
?>
<div id="top" class="top">DEMO</div>
<div id="menu" class="divCls left">
<ul>
    <li>
        <div>
            <span>1.</span>
            <a href="PageDemo/index.html" target="content">PHP无刷新分页</a>
        </div>
    </li>
    <li>
        <div>
            <span>2.</span>
            <a href="PageDemo2/index.php" target="content">PHP可刷新分页</a>
        </div>
    </li>
</ul>
</div>
<div id="main" class="divCls right">
    <iframe id="content" name="content" scrolling="no" frameborder="0" style="width:100%;min-width:1200px; height:100%;min-height: 800px; "></iframe>
</div>
<style type="text/css">
    .divCls{float: left;}
    .left{width:18%;height:100%;border:1px solid #CCC;}
    .right{width:80%;min-width: 1024px;height:100%;margin-top: 0px;border:1px solid #CCC;}
     ul li{margin:5px;list-style:none;}
</style>

