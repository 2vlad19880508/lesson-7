<?php	
if ($_POST['name'] == null) 
{
	echo 'Укажите имя!';
} else {    
	if ($_COOKIE['name'] == null)
	{ 	
	// если нет, то счетчик 0 и создаем куки
	$name = $_POST['name'];	
	setcookie("names", $name, 0x6FFFFFFF);			
	}
}   
 

if ($_COOKIE['count']) 
{ 	// проверяем есть ли куки 
	$cnt = $_COOKIE['count']+1; // если да, то +1 к счетчику
} else {
	// если нет, то счетчик 0 и создаем куки
	$cnt=0;
}
	setcookie("count", $cnt, 0x6FFFFFFF);?>
	
	
<p>Вы посещали эту страницу <b> <?php echo $_COOKIE['count'] ?> </b> раз</p>
<form action="12.php" method="POST" name="formMain" id="formMain">
  Ваше имя: <input type = "text" value = "<?php echo $_COOKIE['names']; ?>" name = "name" ><br>
  <input type="submit" value="Отправить">
 </form> 



 