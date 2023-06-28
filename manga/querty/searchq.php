<?php 
$host = 'localhost';  // Хост, у нас все локально
$user = 'root';    // Имя созданного вами пользователя
$pass = 'root'; // Установленный вами пароль пользователю
$db_name = 'mangasite';   // Имя базы данных
$link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой
$id = $_GET['id'];
$covername = $_GET['cover'];


// Ругаемся, если соединение установить не удалось
if (!$link) {
  echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
  exit;
}
 
?>


<?php


$cover=$_POST['seachbox'];
echo $cover;
$sql = mysqli_query($link, "SELECT `id`, `orname`, `rusname`, `enname`, `cover`, `pages`, `type`, `tags`, `year`, `author`, `artist` FROM `title` WHERE id={$cover} ");
//Если вставка прошла успешно
$row = mysqli_fetch_array($sql);
 
echo $row[2];
echo $row[3];
echo $row[4];

?>

<?php 
 $photoq=mysqli_query($link, "SELECT `cover`FROM `title` WHERE id={$id} ");
 $photo = mysqli_fetch_array($photoq);
// echo $photo[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
 
 <img src="covers/<?=$row[4]?>">
 <div class="popitem3">
            <img src="pixxx/c5a3090c-4ca0-40a2-9102-e0ee0c6dac15.jpg" style="width: 80px;height: 100px;"  class="popmanga_img">
            <div class="mangacontent">
                <h2 class="manga_title">Naruto</h2>
            </div>
        </div>
  
  
 
 
</body>
</html>