<?php
	require 'function.php';
	
	$result = '';
	if (isset($_POST['submit'])) {
		$data = $_POST['email'];
		$userid = new generateUserID();
		$result = $userid->generate($data, true);
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Generate User ID</title>
</head>
<body>
	<form action="" method="post">
		<label for="email">Input Email :</label>
		<input type="email" name="email" id="email" placeholder="user@user.com">
		<button type="submit" name="submit">Generate</button>
	</form>
	<label><?= $result ?></label>

</body>
</html>