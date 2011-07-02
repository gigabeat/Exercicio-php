<?
include 'star.php';
$name = $_POST['name'];
$pass = $_POST['pass'];
$email = $_POST['email'];


$sql="INSERT INTO $tbl_name(`username`,`password`,`email`) VALUES('$name','$pass', '$email')";
if(!mysql_query($sql,$con))
	{
		die(mysql_error());
	}
	echo "Register sucessful";
mysql_close($con);
?>
