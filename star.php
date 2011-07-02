<?
session_start();
$host="localhost";
$username="tcgdeckm_teste";
$password="teste123";
$db_name="tcgdeckm_teste";
$tbl_name="members";

$con = mysql_connect("$host","$username","$password") or die("Connection error");
mysql_select_db("$db_name") or die("error selecting database");
?>
