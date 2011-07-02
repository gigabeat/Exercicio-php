<?
$host="localhost";
$username="tcgdeckm_teste";
$password="teste123";
$db_name="tcgdeckm_teste";
$tbl_name="members";

$con = mysql_connect("$host","$username","$password") or die("Connection error");
mysql_select_db("$db_name") or die("error selecting database");

$name = $_REQUEST['name'];
$pass = $_REQUEST['pass'];
$email = $_REQUEST['email'];


$sql="INSERT INTO $tbl_name(`username`,`password`,`email`) VALUES('$name','$pass', '$email')";
if(!mysql_query($sql,$con))
	{
		die(mysql_error());
	}
	echo "Register sucessful";
mysql_close($con);
?>
