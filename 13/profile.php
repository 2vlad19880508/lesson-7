<?php
session_start();

echo 'Ваше ник ' . $_SESSION['admin'] . '<br>';
echo 'Ваше мейл ' . $_SESSION['mail'] . '<br>';
echo 'Ваш пароль ' . $_SESSION['pass'] . '<br>';
echo 'Ваше имя ' . $_SESSION['name'] . '<br>';

if ($_POST['name'] == null) {
    echo 'Укажите имя!';
} elseif ($_POST['user'] == null) {
	echo 'Укажите ник!';
} elseif ($_POST['mail'] == null) {
	echo 'Укажите mail!';
} elseif ($_POST['pass'] == null) {
	echo 'Укажите Пароль!';
} else {   
	$_SESSION['admin'] = $_POST['user'];
	$_SESSION['mail'] = $_POST['mail'];
	$_SESSION['pass'] = $_POST['pass'];
	$_SESSION['name'] = $_POST['name']; ?>
<meta http-equiv="refresh" content="0; url=login.php">
<?php } ?>
<h3>Изменить данные</h3>
<form method="post" action="profile.php">
 Имя: <input type="text" name="name" /><br />
 Ник: <input type="text" name="user" /><br />
 мейл: <input type="text" name="mail" /><br />
 Пароль: <input type="password" name="pass" /><br />
 <input type="submit" name="submit" value="изменить" />
</form>
