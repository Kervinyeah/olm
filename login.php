<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>登陆</title>
</head>
<body>
<?php
	$con=mysqli_connect("localhost","root","4549a1c472","olm");
	if (mysqli_connect_errno($con)){
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
		exit;
	}

	echo "<p>";
	$result = mysqli_query($con,"SELECT * FROM users WHERE phone=\"".$_POST['phone']."\"");
	if (mysqli_num_rows($result) == 0) {
		echo "登陆失败！"."<br />";
		mysqli_close($con);
		$page="index.html";
		echo "<script>alert('不存在该手机!'); window.location = \"".$page."\";</script>";
		exit;
	}
	
	$row = mysqli_fetch_array($result);
	if ($row['password'] <> $_POST['password']) {
		echo "登陆失败！"."<br />";
		mysqli_close($con);
		$page="index.html";
		echo "<script>alert('密码错误!'); window.location = \"".$page."\";</script>";
		exit;
	}
	
	mysqli_close($con);
	
	// remember 20 days
	if ($_POST['remember'] == "yes")
	{
		setcookie("phone", $_POST['phone'], time()+3600*24*20);
		setcookie("password", $_POST['password'], time()+3600*24*20);
	}
	
	
	
	$str = $_POST['remember']."<br />";
	$str .= "登陆成功！"."<br />";
	$str .= "Id : ".$row['id']."<br />";
	$str .= "Name : ".$row['name']."<br />";
	$str .= "Phone : ".$row['phone']."<br />";
	$str .= "Sex : ".($row['sex'] == 0)?("男"):("女")."<br />";
	
	
	echo "<script type='text/javascript'>";
	echo "alert('".$str."'不存在该手机!');";
	echo "window.location.href='index2.html'";  
	echo "</script>";   
	
?>
</body>
</html>
