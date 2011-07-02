<?
$host="localhost";
$username="root";
$password="teste123";
$db_name="teste";
$tbl_name="members";

$con = mysql_connect("$host","$username","$password") or die("Connection error");
mysql_select_db("$db_name") or die("error selecting database");


$sql="INSERT INTO $tbl_name(`username`,`password`,`email`) 
VALUES
(`User`,`pass`, `email`)";
if(!mysql_query($sql,$con))
	{
		die("mysql error");
	}
	echo "Register sucessful";
mysql_close($con);
?>
