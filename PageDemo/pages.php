<?php
include_once('connect.php');

$page = @$_GET['pageNum']?intval($_GET['pageNum']):0;
$sql="select id from food";
$result = $mysqli->query($sql);
$total = $result->num_rows;//总记录数

$pageSize = 6; //每页显示数
$totalPage = ceil($total/$pageSize); //总页数

$startPage = $page*$pageSize;
$arr['total'] = $total;
$arr['pageSize'] = $pageSize;
$arr['totalPage'] = $totalPage;
$query = $mysqli->query("select id,title,pic from food order by id asc limit $startPage,$pageSize");
while($row = $query->fetch_assoc()){
	 $arr['list'][] = array(
	 	'id' => $row['id'],
		'title' => $row['title'],
		'pic' => $row['pic'],
	 );
}
//print_r($arr);
echo json_encode($arr);
?>