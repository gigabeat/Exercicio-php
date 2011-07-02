<?
session_start();
if(!session_is_registered(nome)){
	setcookie("user","Rubem Mota", time()+60);
}

?>
<html>
	<body>
		<div id="welcome">
			<?
			echo "Welcome" . $_COOKIE["user"] . "!<br />";
			?>
			<p>Share your thoughts</p>
			<a href="logout.php">Logout</a>
		</div>
	</body>
</html>
