<?php

$dbname='UyHlvhbPiDhSsqmTtMup';

$host = 'sqld.duapp.com';
$port = 4050;
$user = 'jkBDSEPVkGXNd3QkpZGtwxdO';
$pwd = 'miMNMvipX4Bd2baf6foZwpchRhD4RtWR';

$link = @mysql_connect("localhost","root","root",true);
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

$sql = "insert into logininfo (username,password) values ('{$name}','{$pass}')";


if(!mysql_query($sql, $link))
{
	die('Error: ' . mysql_error());
}
else
	echo "注册成功";


/*显式关闭连接，非必须*/
mysql_close($link);
?>
