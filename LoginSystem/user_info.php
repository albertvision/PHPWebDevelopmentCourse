<?php

session_start();
if(!isset($_SESSION['user'])) {
	header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Данни на потребителя</title>
</head>
<body>
<ul>
	<li>
		<a href="logout.php">Изход</a>
	</li>
</ul>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<td>Потребителско име:</td>
		<td><?= $_SESSION['user']['username']; ?></td>
	</tr>
	<tr>
		<td>Име:</td>
		<td><?= $_SESSION['user']['name']; ?></td>
	</tr>
	<tr>
		<td>Фамилия:</td>
		<td><?= $_SESSION['user']['last_name']; ?></td>
	</tr>
</table>
</body>
</html>