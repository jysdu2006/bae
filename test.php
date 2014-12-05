<?php

$dbname='UyHlvhbPiDhSsqmTtMup';

$host = 'sqld.duapp.com';
$port = 4050;
$user = 'jkBDSEPVkGXNd3QkpZGtwxdO';
$pwd = 'miMNMvipX4Bd2baf6foZwpchRhD4RtWR';

$link = @mysql_connect("localhost","root","jinying",true);
if(!$link) {
    die("Connect Server Failed: " . mysql_error());
}
/*连接成功后立即调用mysql_select_db()选中需要连接的数据库*/
if(!mysql_select_db("userinfo",$link)) {
    die("Select Database Failed: " . mysql_error($link));
}
 
/*至此连接已完全建立，就可对当前数据库进行相应的操作了*/
//创建一个数据库表

$name=trim($_POST["name"]);
$pass=$_POST["passwd"];

$sql = "select password from logininfo where username='{$name}'";


$ret = mysql_query($sql, $link);


$num=mysql_num_rows($ret);

if ($ret === false)
{
	die("Create Table Failed: " . mysql_error($link));
} 
else
{
	if($num==0)
		echo "查无此用户";
	else if ($num>1) {
		echo "错误！！！";
	}
	else{
		$result=mysql_fetch_row($ret);
		if($pass==$result[0])
			echo "登录成功";
		else
			echo "用户名或密码错误";
	}
}	
/*
if($result->num_rows==0)
	echo "查无此用户";
else if ($result->num_rows>1) {
	echo "错误！！！";
}
else{
	$row=$result->fetch_assoc();
	if($pass==$row["password"])
		echo "登录成功";
	else
		echo "用户名或密码错误";
}
 
/*显式关闭连接，非必须*/
mysql_close($link);
?>
