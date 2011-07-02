<?
include 'star.php';


$nome = $_POST['nome'];
$pass = $_POST['pass'];

$hashpass = sha1($pass);
echo $hashpass;

$sql="SELECT * FROM $tbl_name WHERE username = '$nome' and password='$hashpass'";
$result=mysql_query($sql);

$count = mysql_num_rows($result);

if($count == 1 ){
	session_register("nome");
	header("location:teste.php");	
}
else {
	echo "wrong password or username";
}
?>
