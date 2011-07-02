<?
include 'star.php';

$nome = $_POST['nome'];
$pass = $_POST['pass'];


$sql="SELECT * FROM $tbl_name WHERE username = '$nome' and password='$pass'";
$result=mysql_query($sql);

$count = mysql_num_rows($result);

if($count ==1 ){
	session_register("nome");
	if($password == sha1($pass))
	header("location:teste.php");	
}
else {
	echo "wrong password or username";
}
?>
