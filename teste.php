<?
include 'star.php';

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
