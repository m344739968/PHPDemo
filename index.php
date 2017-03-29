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
        'name'=>'张三',
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
<div>HELLO WORD</div>
<ul>
    <li>
        <div>
            <span>1.</span>
            <a href="PagesDemo/index.html" target="_blank">分页示例</a>
        </div>
    </li>
</ul>

