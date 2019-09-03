<?php
session_start();

echo 'Ваше ник ' . $_SESSION['admin'] . '<br>';
echo 'Ваше мейл ' . $_SESSION['mail'] . '<br>';
echo 'Ваш пароль ' . $_SESSION['pass'] . '<br>';
echo 'Ваше имя ' . $_SESSION['name'] . '<br>';
?>