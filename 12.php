<?php	
// проверяем есть ли куки 
if (isset($_COOKIE['count'])) {
	$cnt = $_COOKIE['count']+1; // если да, то +1 к счетчику
} else {
	$cnt=0; // если нет, то счетчик 0 и создаем куки
}
	setcookie("count", $cnt, 0x6FFFFFFF);
	
if ($_POST['name'] == null) {
    echo 'Укажите имя!'; // если поле пустое, пишет укажите имя
} else {    
	$name = $_POST['name'];	
	setcookie("name", $name, 0x6FFFFFFF);			
}
	
?>
	
<p>Вы посещали эту страницу <b> <?php echo $_COOKIE['count'] ?> </b> раз</p>
<form action="12.php" method="POST" name="formMain" id="formMain">
	Ваше имя: <input type = "text" value = "<?php echo $_COOKIE['name']; ?>" name = "name" ><br>
	<input type="submit" value="Отправить">
</form> 
