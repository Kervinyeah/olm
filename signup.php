<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>注册</title>
</head>
<body>
<?php
	
	$con=mysqli_connect("localhost","root","4549a1c472","olm");
	if (mysqli_connect_errno($con)){
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
		exit;
	}
	
	$result = mysqli_query($con,"SELECT * FROM users WHERE phone=\"".$_POST['phone']."\"");
	if (mysqli_num_rows($result) <> 0) {
		echo "注册失败！"."<br />";
		mysqli_close($con);
		$page="index.html";
		echo "<script>alert('该手机已经注册过!'); window.location = \"".$page."\";</script>";
		exit;
	}
	
	mysqli_query($con,"INSERT INTO users (password, name, phone, sex) 
						VALUES (\"".$_POST['password']."\",\"".$_POST['name']."\",\"".$_POST['phone']."\",\"".$_POST['sex']."\")");
	
	$result = mysqli_query($con,"SELECT * FROM users WHERE phone=\"".$_POST['phone']."\"");
	if (mysqli_num_rows($result) == 0) {
		echo "注册失败！"."<br />";
		mysqli_close($con);
		$page="index.html";
		echo "<script>alert('注册失败!'); window.location = \"".$page."\";</script>";
		exit;
	}
	$row = mysqli_fetch_array($result);
	
	mysqli_close($con);
	
	echo "<script type='text/javascript'>";  
	echo "window.location.href='index.html'";  
	echo "</script>";   
	/*
	echo "注册成功！"."<br />";
	echo "Id : ".$row['id']."<br />";
	echo "Name : ".$row['name']."<br />";
	echo "Phone : ".$row['phone']."<br />";
	echo "Sex : ".($row['sex'] == 0)?("男"):("女")."<br />";	
	echo "</p>";					
	*/
	
?>
</body>
</html>
