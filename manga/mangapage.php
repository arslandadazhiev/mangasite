<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="read.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap');
      </style>
 

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
 

 //ВЫборка фото 

 $photoq=mysqli_query($link, "SELECT `cover`FROM `title` WHERE id=$id ");
 $photo = mysqli_fetch_array($photoq);


 //выборка главы
 $chapterq=mysqli_query($link, "SELECT `pages`FROM `title` WHERE id=$id ");
 $chapter = mysqli_fetch_array($chapterq);
// echo $photo[0];


 
?>
 
 
 
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

<!-- Основная форма -->
<div class="title_wrapper">
			 
    
    <div class="left_part">
          <div class="coverplace"><img src="covers/<?=$photo[0]?>" style="width: 303px;height: 433px ;border-radius: 7px;" ></div>
    <div class="otherdescr_wrap" >
       <div class="otherdescr_content">
           <div class="otherdescr_item">
            <p>ТИП: <?=$row[6];?></p>
            </div>

            <div class="otherdescr_item">
            <p>ГОД: <?=$row[8];?></p>
            </div>
            <div class="otherdescr_item">
            <p>АВТОР:<?=$row[9];?></p></div>

            <div class="otherdescr_item">
            <p>ХУДОЖНИК:<?=$row[10];?> <?php ?></p>
            </div>
       </div>

    </div>
  </div>
   

<div class="title_name_wrap">
      <div class="title_name_content">
                <div class="title_name"><p><?=$row[2];?></p></div>
                <div class="title_name"><p><?=$row[3];?></p></div>
                <div class="title_name"><p><?=$row[1];?></p></div>
          
        </div>
    </div>
 



    <div class="title_desc_wrap">
<p class="desc_text"><?
$descr_path="title/$row[1]/$v_c";   
 
 

$files=scandir($descr_path);
$descr=file_get_contents("$descr_path/$row[11]");
echo $descr;?></p>
</div>
 

<div class="tags_wrap">
  <label for="">Теги:</label>
  <div class="tag_list">
    <div class="tag_item">
    <? if (str_contains($row[7], '1')){echo"повседневность"; } ?>&nbsp;
    </div>
    <div class="tag_item">
    <? if(str_contains($row[7], '2')){ echo"детектив";}?>&nbsp;
    </div>
    <div class="tag_item">
    <? if(str_contains($row[7], '3')){ echo"трагедия";}?>&nbsp;
    </div>
    <div class="tag_item">
    <? if(str_contains($row[7], '4')){echo"романтика";}?>&nbsp;
    </div>
    <div class="tag_item">
    <? if(str_contains($row[7], '5')){echo"комедия";}?>&nbsp;
    </div>
  </div>
</div>


<div class="chapter_list_wraper">
      <h2>Главы:</h2>
        <p for="mangaform" id="chapters"><?=$files2[1];?></p>
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
              <div class="chapter_list_content"> 
                <div class="chapter_list_item"> 
                     <a name="prod[]" href="selectedchapter.php?id=<?=$id?>&vol_ch=<?=$link_id?>" > <p> Том:<?=$v_trim?> Глава:<?=$c_trim?></p></a>
               </div>
              </div>
              <?
                
            }
      
         ?>
         
         
</div>
</body>
</html>