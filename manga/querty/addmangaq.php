<?php 
$host = 'localhost';  // Хост, у нас все локально
$user = 'root';    // Имя созданного вами пользователя
$pass = 'root'; // Установленный вами пароль пользователю
$db_name = 'mangasite';   // Имя базы данных
$link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой
$id = $_GET['id'];


// Ругаемся, если соединение установить не удалось
if (!$link) {
  echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
  exit;
}
 
?>

<?php

$cover=$_POST['cover'];
$orname=$_POST['orname'];
$runame=$_POST['runame'];
$enname=$_POST['enname'];
$title_descr=$_POST['titledescr'];
$type=$_POST['type'];
$year=$_POST['year'];
$author=$_POST['author'];
$artist=$_POST['artist'];

$tags=$_POST['tags'];
$b=implode(',',$tags);


 
mkdir("../title/$orname");
file_put_contents("../title/$orname/$orname.txt",$title_descr);
 
$desc_title_file ="$orname.txt";
echo $desc_title_file;

$sql = mysqli_query($link,"INSERT INTO `title` (`orname`, `rusname`, `enname`, `cover`,`description`,`pages`,`type`,`tags`,`year`,`author`,`artist`) VALUES ('$orname', '$runame', '$enname','$cover','$desc_title_file','$orname','$type','$b','$year','$author','$artist') " );
 
//Если вставка прошла успешно
if ($sql) {
  echo '<p>Данные успешно добавлены в таблицу.</p>';
  
} else {
  echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
}


?>

 