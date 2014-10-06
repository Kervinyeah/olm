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
	
	echo $_POST['remember']."<br />";
	echo "登陆成功！"."<br />";
	echo "Id : ".$row['id']."<br />";
	echo "Name : ".$row['name']."<br />";
	echo "Phone : ".$row['phone']."<br />";
	echo "Sex : ".($row['sex'] == 0)?("男"):("女")."<br />";	
	echo "</p>";
	
	mysqli_close($con);
?>
</body>
</html>
