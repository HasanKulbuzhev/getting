<?php
$s = [1,2,3,4,2,3,22,423,432];
foreach ($s as $a){
	if (strchr($a,'3') == 0) ;else echo $a . '<br>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php //if (!isset($_GET['age'])){  ?>
<form action="" method="GET">
<p><input placeholder = "<?php echo $_GET['name'] ?>" type="text" name="name"> </p>
<p><input value = "<?php echo $_GET['age'] ?>" type="text" name="age"> </p>
<textarea id="" name="message" cols="30" rows="10" placeholder = "<?php echo $_GET['message'] ?>"></textarea>
	<input type="submit">
</form>	
<?php   
	echo "Ваше имя:" . strip_tags($_GET['name']) . "<br>";
	echo "Ваш возраст:" . strip_tags($_GET['age']) . "<br>";
	echo "Ваше сообщение:" . strip_tags($_GET['message']) . "<br>";


 ;?>
<form action="" method="GET">
	<input type="hidden" name="hello" value="0">
	<input type="checkbox" name="hello" value="1">
	<input type="submit">
</form>
<?php if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 0) echo "Отмечен";
if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 1) {
		echo 'не отмечен';
}?>

<form action="">
<p>Знаете ли вы html?</p>
<p><input type="radio" name = "html?" value = "знаю" checked> знаю </p>
<p><input type="radio" name = "html?" value = "не знаю" checked> не знаю</p>

</form>

<li>
<li><a href="?a=1">1</a></li>
<li><a href="?a=2">2</a></li>
<li><a href="?a=3">3</a></li>
<li><a href="?a=4">4</a></li>
</li>

<?php echo $_REQUEST['a'];?>


<?php 
if($_REQUEST['html'] == 'знаю') echo 'jjjj';
	function input($value,$type,$name)
	{
		if(isset($_REQUEST['name']) and isset($_REQUEST['value']) and isset($_REQUEST['type']))  {
			$name = $_REQUEST['name'];
			$type = $_REQUEST['type'];
			$value = $_REQUEST['value'];
		}
		else echo "<input type=\"$type\" name=\"$name\" value=\"$value\">";
	} 
	input(12,'text','message');
	echo "<br>" . date('d-m-Y',mktime(0,0,0,12,29,18)) . '<br>';
	$date = date_create('2019-12-22');
	date_modify($date,'1 day');
	echo date_format($date,'d.m.Y') . '<br>';
	echo time() - mktime(7,25,59,9,1,2010) . '<br>';
	echo strtotime('2031-09-23 12:58:59') . '<br>';
	echo  date('Y.m.d H.i.s') . '<br>';
	echo date('Y.d.m',mktime(0,0,0,9,1)) . '<br>';
	//Массив дней недели:
	$week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
	
	$i =  date('w',mktime(0,0,0,9,1));
	echo $week[$i] . '<br>';


	//echo time() - mktime(13,12,59,3,15,2000);
	$date = date_create('2025-12-31');
	date_modify($date,'3 day 1 month');
	echo '1)' . date_format($date , 'd.m.Y') . '<br>';
	echo mktime(0,0,0,0,0,0);
?>


<form action="" method = "get">
<p>Введите когда вы родились</p>
<p>Введите год<input type="text" name = "year"></p>
<p>Введите месяц<input type="text" name = "month"></p>
<p>Введите день<input type="text" name = "day"></p>
<p><input type="submit"></p>
<p><?php  //echo round((mktime(0,0,0,$_REQUEST['month'],$_REQUEST['day'],date('Y')+1) - time())/24/60/60 , 0) ;
$i=31;
if (ceil(date('m')) > 5) {
	while (date('w', mktime(0,0,0,5,$i,date('Y')+1)) > 0){
		$i--;
	}
	echo round((mktime(0,0,0,5,$i,date('Y')+1) - time())/24/60/60);
}else{
	while (date('w',mktime(0,0,0,5,$i,date('Y'))) > 0){
		$i--;
	}
	echo round((mktime(0,0,0,5,$i,date('Y')+1) - time())/24/60/60);
}

?>



<form action="">
<p><textarea id="" name="count_name" cols="30" rows="10" ><?php echo $_REQUEST['count_name']; ?></textarea></p>
<p><input type="submit"></p>
</form>
</p>
<?php
$count_name = str_replace(' ' , '' ,$_REQUEST['count_name']);
echo "Количество слов в строке без пробелов:" . mb_strlen($count_name) . "<br>";
foreach(count_chars($count_name,1) as $key => $value){
	echo "кол-во символa " . '"' . chr($key) . '"' . " равно " . round($value*100 / mb_strlen($count_name)) . "% от всей строки" . "<br>";
}	








	$host = 'localhost';
	$user = 'hasan';
	$password = '123';
	$db_name = 'test';
	$link = mysqli_connect($host, $user,$password,$db_name);
	mysqli_query($link,"SET NAMES 'utf8'");
//Формируем тестовый запрос:
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	print_r($data);
	//$query = "DELETE FROM workers WHERE name = 'Никита'";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));


	//$query = "update workers set salary = 700 where salary = 500";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
?>
	<table border = 1px> <tbody>
<tr>
	<th>id</th>
	<th>name</th>
	<th>age</th>
	<th>salary</th>
	<th>Действия</th>
</tr>

<?php
	if (isset($_GET['del'])){
	$del = $_GET['del'];
	$query = "delete  from workers where id = $del";
	mysqli_query($link, $query) or die(mysqli_error($link));
	}
	foreach( $data as $key => $value ){
	echo "<p><tr>
		<td>". $key . "</td>
		<td>". $value['name'] . "</td>
		<td>". $value['age'] . "</td>
		<td>". $value['salary'] . "</td>
		<td>" . '<a href="?del=' . $value['id'] . '">удалить</a>' . "</td>
	</tr></p>";

	}
 

?>
</tbody> </table>
<?php
	echo '<p><form action="">
		<input type="text" name = "name">
		<input type="text" name = "age">
		<input type="text" name = "salary">
		
		
	</form></p>';  


?>

</form>
</body>
</html>


