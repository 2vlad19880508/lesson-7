<?php 
session_start();
if($_POST['submit']){
	if(($_POST['user'] == $_SESSION['admin'] || $_POST['user'] == $_SESSION['mail']) && $_POST['pass'] == $_SESSION['pass'])
	{
		header("Location: profile.php");
		exit;
	} else {
		echo '<p>Логин или пароль неверны!</p>';
	}
}

?>
<form method="post">
 Введите мейл или ник: <input type="text" name="user" /><br />
 Пароль: <input type="password" name="pass" /><br />
 <input type="submit" name="submit" value="Войти" />
</form>