<?
include 'star.php';
?>
<html>
	
	<body
	<div id="teste">
	<? 
	if ( isset($_COOKIE["user"]))
		
		include("teste.php");
	else
		include("loginform.html");
	
	?>
	</div>
</body>
</html>	