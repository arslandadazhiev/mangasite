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
    $cover=trim(strip_tags(stripcslashes(htmlspecialchars($cover))));

    $sql = mysqli_query($link, "SELECT `id`, `orname`,`enname`, `cover`, `year` FROM `title` WHERE enname like '%$cover%' or orname like '%$cover%' ");

    $row = mysqli_fetch_array($sql);
    $txt=$row;
    
 
?>
 
 
 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleindex.css">
    <title>Reach result</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap');
      </style>
</head>
<body >

 
 
<header class="header">
            <div class="header_content">
                <div class="topbar">
                    <a href="index.php"><img src="int/logo.png" ></a><
                    </div>
            </div>  
            <div class="header_content">
                <div class="topbar">
                <object type="image/png"  data="int/catalog.png"> <img src="int/seachbt.png" >  </object>  
                    </div>
            </div>
            <div class="header_content">
                <div class="topbar">
                <object type="image/png"  data="int/readed.png"> <img src="int/seachbt.png" >  </object>  
                    </div>
            </div>
            <div class="header_content">
                <div class="topbar">
            </div>       
            <div class="header_content">
                        <div class="topbar">
                <form  action="searchq.php" method="POST">  <input type="text" name="seachbox" placeholder="Поиск" style="   border: unset;  border-bottom: 2px solid  #e3e3e3;  outline: none;  background: #222222; color: aliceblue;"></form>
                    </div>
            </div>
            <div class="header_content">
                    <div class="topbar">
                <object type="image/png"  data="int/seachbt.png"> <img src="int/seachbt.png" >  </object>  
                    </div>
                  
          </div> 
                
                
</header>

    
<label id="rearch_result_label">Результаты поиска:</label>
<div class="rearch_result_wrap" style="display:flex; flex-wrap: wrap;">
          
    <div class="rearch_result_catalog">
        <div class="product">
        <a href="mangapage.php?id=<?=$row[0]?>" ><img src="pixxx/<?=$row[3];?> "class="product_img" style="width: 150px; height: 215px; ">
              
             <div class="mangacontent">

                <h1 class="manga_title"><?=$row[1];?></h1>
                <p class="manga_description"><?=$row[4];?></p>
                
             </div></a>
        </div>
 
    </div>
     
     
</div>
</body>
</html>



