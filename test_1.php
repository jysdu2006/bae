<?php

$servername="localhost";
$usrname="root";
$passwd="root";
$dbname="UyHlvhbPiDhSsqmTtMup";
$conn=new mysqli($servername,$usrname,$passwd,$dbname);
if($conn->connect_error)
{
	die("connection failed".$conn->connect_error);
}
$name=trim($_POST["name"]);
$pass=$_POST["passwd"];

$sql="select password from userinfo where username='$name'";
$result=$conn->query($sql);

if($result->num_rows==0)
	echo "查无此用户";
elseif ($result->num_rows>1) {
	echo "错误！！！";
}
else{
	$row=$result->fetch_assoc();
	if($pass==$row["password"])
		echo "登录成功";
	else
		echo "用户名或密码错误";
}

?>
