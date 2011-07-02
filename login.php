<?
$host="localhost";
$username="tcgdeckm_teste";
$password="teste123";
$db_name="tcgdeckm_teste";
$tbl_name="members";

mysql_connect("$host","$username","$password") or die("Connection error");
mysql_select_db("$db_name") or die("error selecting database");

$nome = $_REQUEST['nome'];
$pass = $_REQUEST['pass'];


$sql="SELECT * FROM $tbl_name WHERE username = '$nome' and password='$pass'";
$result=mysql_query($sql);

$count = mysql_num_rows($result);

if($count ==1 ){
	session_register("nome");
	session_register("pass");
	header("location:teste.php");
}
else {
	echo "wrong password or username";
}
?>
