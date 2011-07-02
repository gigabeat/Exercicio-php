<?
include 'star.php';
if(!session_is_registered(nome)){
	setcookie("user","Rubem Mota", time()+60);
}

?>
<html>
	<body>
		<div id="welcome">
			<?
			echo "Welcome" . $_SESSION['username'] . "!<br />";
			?>
			<p>Share your thoughts</p>
			<a href="logout.php">Logout</a>
		</div>
	</body>
</html>
