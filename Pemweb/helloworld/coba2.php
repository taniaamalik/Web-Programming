<html><body>
	<?php
	$uname = isset($_GET['uname']) ? $_GET['uname'] : 'guest <br>';
	var_dump($uname);
	
	$uname = $_GET['uname'] ?? 'guest<br>';
	var_dump($uname);
	
	$_GET['uname'] = 'admin';
	$uname = $_GET['uname'] ?? 'guest';
	var_dump($uname);
	?>
</body></html>