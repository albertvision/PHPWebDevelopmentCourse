<?php

session_start();

$users = [
	[
		'username' => 'testuser',
		'password' => 'testpass',
		'name' => 'Пенчо',
		'last_name' => 'Петров',
	]
];

if(isset($_POST['login'])) {
	foreach($users as $user) {
		if($user['username'] === $_POST['username'] && $user['password'] == $_POST['password']) {
			$_SESSION['user'] = $user;
			header('Location: user_info.php');
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Вход</title>
	<meta charset="utf-8" />
</head>
<body>
<form method="POST">
	<?php if(isset($_POST['login'])) { ?>
	<p style="color: red;">Въвели сте невалидни данни за вход.</p>
	<?php } ?>
	<label for="username">Потребителско име:</label>
	<input type="text" name="username" id="username" /> 
	<br>
	<label for="password">Парола:</label>
	<input type="password" name="password" id="password" /> 
	<br>
	<input type="submit" name="login" value="Вход" />
</form>
</body>
</html>