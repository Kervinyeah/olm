<html>
<body>

<?php 
if (isset($_COOKIE["user"]))
	echo "old<br />";
else
{
	setcookie("user", "Alex Porter", time()+3600*24*20);
	echo "new<br />";
}
echo "Welcome " . $_COOKIE["user"] . "!<br />";
?>

</body>
</html>