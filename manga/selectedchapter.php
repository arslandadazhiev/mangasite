<?php
 $host = 'localhost';  // Хост, у нас все локально
 $user = 'root';    // Имя созданного вами пользователя
 $pass = 'root'; // Установленный вами пароль пользователю
 $db_name = 'mangasite';   // Имя базы данных
 $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой
 $id = $_GET['id'];
 $v_c = $_GET['vol_ch'];
 
 // Ругаемся, если соединение установить не удалось
 if (!$link) {
   echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
   exit;
 }
 
$sql = mysqli_query($link, "SELECT `id`, `orname`, `rusname`, `enname`, `cover`, `pages`, `type`, `tags`, `year`, `author`, `artist`,`description` FROM `title` WHERE id=$id ");
//Если вставка прошла успешно
$row = mysqli_fetch_array($sql);

 
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="read.css">
  <title>читать <?=$row[5]?></title>
  <style>
      @import url('https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap');
      </style>
 
 </head>
 <body>

 <header class="header">
            <div class="header_content">
                <div class="topbar">
                    <a href="index.php"><img src="int/logo.png" ></a>
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
                    <a href="addmanga.php">  <object type="image/png"  data="int/addbutton.png"> <img src="int/addbutton.png" style="scale:50%;" >  </object>   </a>
                    </div>
                  
          </div> 
                
                
</header>
 <div class="page_wrapp"> 
    
  
<?
     $chapter_path="title/$row[5]/$v_c/";
      
      $files=scandir($chapter_path);
      sort($files,SORT_NUMERIC);
     for($i=0;$i<=count($files)-1;$i++){

      if($files[$i] !='.' && $files[$i]!='..'){
          echo  " <div class='page'> <img src='$chapter_path$files[$i]' style='  border-radius: 7px; border: 2px solid aliceblue ; '/>
          </div> ";    
      
      }
                 
       }
       
 
?> 
  
 </div>

 <div class="chapter_movement_wrap">
  <div class="movement_form">

        <div class="movement_form_content" >
        <? // СПИСОК ГЛАВ
        $dir_main="title/$row[5]";
        $files1=scandir($dir_main);


        $c_array=array();
        $v_array=array();
        $link_array=array();
        foreach (glob("$dir_main/*") as $filename) {
        if(is_dir($filename)){

        $showed_name=str_replace("$dir_main/", '', $filename);
        
        $pieces = explode(" ", $showed_name);
        $c_trim = trim($pieces[3], 'c');
      
        $v_trim = trim($pieces[2], 'v');
        array_push($c_array,$c_trim);
        array_push($v_array,$v_trim);
        array_push($link_array,$showed_name);
 
      
        }
    
      
        }
        natsort($c_array);
        natsort($v_array);
        natsort($link_array);
       
            foreach ($link_array as $chapter) {
 
              $link_id=str_replace("$dir_main/", '', $chapter);
              $pieces = explode(" ", $link_id);
              $c_trim = trim(end($pieces), 'c');
            
              $v_trim = trim(prev($pieces), 'v');

              ?>
               
                     <a name="prod[]" href="selectedchapter.php?id=<?=$id?>&vol_ch=<?=$link_id?>" > <p> Том:<?=$v_trim?> Глава:<?=$c_trim?></p></a>
               
              <?
                
                
            }
      
         ?>
         
  </div>
 </div>


 </body>
 </html>

 