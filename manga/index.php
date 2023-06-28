<!DOCTYPE html>
 
<head>
<meta charset="UTF-8">
   
    <title>Manga site</title>
    <link rel="stylesheet" href="styleindex.css">

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap');
      </style>
     
    
</head>
<body>
<div class="wrapper">

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
        <main class="main">
        <div class="titleline" >
                 
                    <div class="lineitem">
                        <div class="product">
                            <img src="pixxx/Хранители.png" style="width: 130px;height: 195px;">
                            <div class="mangacontent">
                
                                <h1 class="manga_title">Watchmen</h1>
                                <p class="manga_description"></p>
                            </div>
                        </div>
                
                    </div>
                    <div class="lineitem">
                        <div class="product">
                            <img src="pixxx/Спаун.jpg"  style="width: 130px;height: 195px;">
                            <div class="mangacontent">
                
                                <h1 class="manga_title">Spawn</h1>
                                <p class="manga_description"></p>
                            </div>
                        </div>
                
                    </div>
                    <div class="lineitem">
                        <div class="product">
                            <img src="pixxx/1668427410_0.04778900.jpg"   style="width: 130px;height: 195px;">
                            <div class="mangacontent">
                
                                <h1 class="manga_title">Mashle</h1>
                                <p class="manga_description"></p>
                            </div>
                        </div>
                
                    </div>
                    <div class="lineitem">
                        <div class="product">
                            <img src="pixxx/1460646957_0.16406400.jpg"  style="width: 130px;height: 195px;">
                            <div class="mangacontent">
                
                                <h1 class="manga_title">Sonic the Heg...</h1>
                                <p class="manga_description"></p>
                            </div>
                        </div>
                
                    </div>
                
            </div> 

        <div class="left_menu">
            
                

                
         
                <div class="mst_pop_wrap" >
                <label id="new_now_label">Новое сейчас:</label>
                    <div class="mst_pop_catalog">
                        <div class="mst_pop_item">
                            <img src="pixxx/1673441391_0.00770700.jpg" style="width: 80px;height: 100px;"  class="popmanga_img"><p>Berserk</p>
                            <div class="mangacontent">
                             
                            </div>
                        </div>
                        <div class="mst_pop_item">
                            <img src="pixxx/1502376409_0.58055600.jpg" style="width: 80px;height: 100px;"  class="popmanga_img"><p>Ultimate Spider-Man</p>
                            <div class="mangacontent">
                               
                            </div>
                        </div>
                        <div class="mst_pop_item">
                            <img src="pixxx/c5a3090c-4ca0-40a2-9102-e0ee0c6dac15.jpg" style="width: 80px;height: 100px;"  class="popmanga_img"><p>Naruto</p>
                            <div class="mangacontent">
                                 
                            </div>
                        </div>
                        <label id="show_all">показать все(15)</label>
                
                    </div>
                </div>
                
                
             <div class="sociallinks_wrapper">
                <div class="soclinks_catalog">
                    <div class="social_links_Form" >
                    <img src="int/vk_white.png" id="vk_img"/><a  href="https://vk.com/mi.tut.prosta2">vk.com/man&com</a>  
                    </div>
                    <div class="social_links_Form" >
                    
                    <img src="int/tw_white.png" id="tw_img"/><a    href="https://vk.com/mi.tut.prosta2">twitter.com/ma&co</a> 
                    </div>
                    <div class="social_links_Form" >
                    
                    <img src="int/tgicon.png" id="tg_img"/><a   href="https://t.me/mangaread1">t.me/man&com</a> 
                    </div>
                </div>
            </div>    
                
              
            <div class="new_in_catalog_wrap" >
            <label id="new_incatalog_label">Новое в катологе:</label>
            <div class="new_manga_catalog">
                    <div class="new_manga_catalog_form">
                        <div class="new_cat_item">
                            <img src="pixxx/1651324683_0.55677700.jpg" style="width: 80px;height: 100px;" ><p>Amazing Spider-Man</p>
                            <div class="mangacontent">
                                
                            </div>
                        </div>
                    </div>   
                    <div class="new_manga_catalog_form">
                        <div class="new_cat_item">
                            <img src="pixxx/1649172624_0.23888800.jpg" style="width: 80px;height: 100px;" ><p>Batman Beyond</p>
                            <div class="mangacontent">
                                
                            </div>
                        </div>
                    </div>   
                    <div class="new_manga_catalog_form">
                        <div class="new_cat_item">
                            <img src="pixxx/1663313724_0.54415700.jpg" style="width: 80px;height: 100px;" ><p>Ant-man</p>
                            <div class="mangacontent">
                                
                            </div>
                        </div>
                    </div>   
                    <div class="new_manga_catalog_form">
                        <div class="new_cat_item">
                            <img src="pixxx/ХЗ.jpg" style="width: 80px;height: 100px;" ><p>Aitsu no Kanojo</p>
                            <div class="mangacontent">
                                
                            </div>
                        </div>
                    </div>   

               <label id="show_all">показать все(15)</label>
                
          </div>       
        </div>
    </div>


         
        <div class="mangacatalog_wrap"> 
        <label id="popnow_label">Популярно сейчас:</label> 
        <div class="mangacatalog" >
       
                    
            <div class="manga_catalogitem" >
                <div class="product">
                <a href="mangapage.php?id=32"><img src="pixxx/1597675575_0.96734700.jpg" class="product_img" style="width: 150px; height: 215px;"></a> 
                        
                        <div class="mangacontent">

                        <h1 class="manga_title">Chainsaw Man</h1>
                        <p class="manga_description">Shueisha/2018</p>
                        
                        </div>
                </div>
            
            </div>
            <div class="manga_catalogitem">
                <div class="product">
                        <img src="pixxx/14489100631275_poster.jpg" class="product_img" style="width: 150px; height: 215px;">
                        <div class="mangacontent">

                        <h1 class="manga_title">Injustice</h1>
                        <p class="manga_description">DC Comics

                                            </p>
                        </div>
                </div>
            
            </div>
            <div class="manga_catalogitem">
                <div class="product">
                        <img src="pixxx/3.jpg" class="product_img" style="width: 150px; height: 215px;">
                        <div class="mangacontent">

                        <h1 class="manga_title">Jujutsu Kaisen</h1>
                        <p class="manga_description">Shueisha/2018

                                            </p>
                        </div>
                </div>
            
            </div>
            <div class="manga_catalogitem">
                <div class="product">
                        <img src="pixxx/1527077284_0.63593300.jpg" class="product_img" style="width: 150px; height: 215px;">
                        <div class="mangacontent">

                        <h1 class="manga_title">The Batman S...</h1>
                        <p class="manga_description">DC Comics/2004
                                            </p>
                        </div>
                </div>
            
            </div>
            <div class="manga_catalogitem">
                <div class="product">
                        <img src="pixxx/1655053279_0.75956100.jpg" class="product_img" style="width: 150px; height: 215px;">
                        <div class="mangacontent">

                        <h1 class="manga_title">Iron Man (Vol 3)</h1>
                        <p class="manga_description">Marvel Comics/1998
                                            </p>
                        </div>
                </div>
            
            </div>
            <div class="manga_catalogitem">
                <div class="product">
                        <img src="pixxx/1669818790_0.35843300.jpg" class="product_img" style="width: 150px; height: 215px;">
                        <div class="mangacontent">

                        <h1 class="manga_title">Dr. Stone</h1>
                        <p class="manga_description">Shueisha/2017
                                            </p>
                        </div>
                </div>
            
            </div>
            <div class="manga_catalogitem">
                <div class="product">
                        <img src="pixxx/1617945088_0.94992500.jpg" class="product_img" style="width: 150px; height: 215px;">
                        <div class="mangacontent">

                        <h1 class="manga_title">Attack of the...</h1>
                        <p class="manga_description">Kodansha/2009

                                            </p>
                        </div>
                </div>
            
            </div>
            <div class="manga_catalogitem">

                <div class="product">
                        <img src="pixxx/1462958178_0.04829000.jpg" class="product_img" style="width: 150px; height: 215px;">
                        <div class="mangacontent">

                        <h1 class="manga_title">One Piece</h1>
                        <p class="manga_description">Shueisha/1997

                                            </p>
                        </div>
                </div>
            
            </div>
        </div>
        </div>





        
        <div class="lasttitles_wrap">
        <label id="lasttitlesLabel">Последние выпуски:</label>
        <div class="lasttitles" style="display:flex; flex-wrap: wrap;">
      
            <div class="lasttitles_catalogitem">
                <div class="product">
                        <img src="pixxx/1655635160_0.42921300.jpg" class="product_img" style="width: 150px; height: 215px;">
                        <div class="mangacontent">

                        <h1 class="manga_title">Poison Ivy</h1>
                        <p class="manga_description">DC Comics/2022

                                            </p>
                        </div>
                </div>
            
            </div>
            <div class="lasttitles_catalogitem">
                <div class="product">
                        <img src="pixxx/1665328189_0.03793500.jpg" class="product_img" style="width: 150px; height: 215px;">
                        <div class="mangacontent">

                        <h1 class="manga_title">Batman: One...</h1>
                        <p class="manga_description">DC Comics/2022</p>
                        </div>
                </div>
            
            </div>
            <div class="lasttitles_catalogitem">
                <div class="product">
                        <img src="pixxx/1654918654_0.48083800.jpg" class="product_img" style="width: 150px; height: 215px;">
                        <div class="mangacontent">

                        <h1 class="manga_title">Moon Knight</h1>
                        <p class="manga_description">Marvel Comics/2022

                                            </p>
                        </div>
                </div>
            
            </div>
            <div class="lasttitles_catalogitem">
                <div class="product">
                        <img src="pixxx/9fa4c1ad-12f2-41b5-9d68-7fb317ea25a6.jpg" class="product_img" style="width: 150px; height: 215px;">
                        <div class="mangacontent">

                        <h1 class="manga_title">Fabricant 100</h1>
                        <p class="manga_description">Kodansha/2022
                                            </p>
                        </div>
                </div>
            
            </div>
            <div class="lasttitles_catalogitem">
                <div class="product">
                        <img src="pixxx/ЖХалк.jpg" class="product_img" style="width: 150px; height: 215px;">
                        <div class="mangacontent">

                        <h1 class="manga_title">She-Hulk (Vol 5)</h1>
                        <p class="manga_description">Marvel Comics/2022
                                            </p>
                        </div>
                </div>
            
            </div>
            <div class="lasttitles_catalogitem">
                <div class="product">
                        <img src="pixxx/1664169701_0.95349600.jpg" class="product_img" style="width: 150px; height: 215px;">
                        <div class="mangacontent">

                        <h1 class="manga_title">Red Hood</h1>
                        <p class="manga_description">DC Comics/2022
                                            </p>
                        </div>
                </div>
            
            </div>
            <div class="lasttitles_catalogitem">
                <div class="product">
                        <img src="pixxx/214c1657-0b3a-4ce4-9373-6268d6c63710.png" class="product_img" style="width: 150px; height: 215px;">
                        <div class="mangacontent">

                        <h1 class="manga_title">A Story Abou...</h1>
                        <p class="manga_description">Square-Enix/2022</p>
                        </div>
                </div>
            
            </div>
            <div class="lasttitles_catalogitem">

                <div class="product">
                        <img src="pixxx/76563051-7b5b-4fc8-a6c8-204b4444a3b2.jpg" class="product_img" style="width: 150px; height: 215px;">
                        <div class="mangacontent">

                        <h1 class="manga_title">Gachi Akuta</h1>
                        <p class="manga_description">Shueisha/2022

                                            </p>
                        </div>
                </div>
            
            </div>
        </div>
        </div>



         
    <div class="comment_wrap" style="display:flex; flex-wrap: wrap;">
    <label id="last_comments_label" >Последние комментарии:</label>
        <div class="comment_catalog">
            <div class="comment_form">
                
                <img src="pixxx/Тупые.png"  class="comment_avatar"style="width: 50px; height: 50px;border: 1px solid #FF9700;border-radius: 10px; margin-left:10px;margin-top:10px;">
                    <div class="comment_content">
                        <h1 class="comment_title">
                        _BUTThole_96
                        </h1>
                        <p class="commenttext">Эээ... (-__-) А чё где можно на Рейвен посмотреть? Не понял.. эээ</p>
                        
                        </div>
            </div>
            <div class="comment_form">
                
                <img src="pixxx/Тупые2.jpg"  class="comment_avatar"style="width: 50px; height: 50px;border: 1px solid #FF9700;border-radius: 10px;">
                    <div class="comment_content">
                        <h1 class="comment_title">
                        kingofchicks
                        </h1>
                        <p class="commenttext">ГАТС ТУПО Я! ТЕПЕРЬ ВСЕ ЧИКИ МОИ!У МЕНЯ ЕСТЬ МЕЧ! И Я ИХ ВСЕХ ШМАКБАМ ТУМ БАМ ААААААААААААААААА</p>
                            
                    
                    
                        </div>
            </div>
            <div class="comment_form">
                
                <img src="pixxx/Лунный.jpg"  class="comment_avatar"style="width: 50px; height: 50px;border: 1px solid #FF9700;border-radius: 10px;">
                    <div class="comment_content">
                        <h1 class="comment_title">
                        SeadBoy;(
                        </h1>
                        <p class="commenttext">PLS удалите все материалы со мной. Мне стыдно. :(</p>
                            
                    
                    
                        </div>
            </div>
            <div class="comment_form">
                
                <img src="pixxx/Скотт.jpg"  class="comment_avatar"style="width: 50px; height: 50px;border: 1px solid #FF9700;border-radius: 10px;">
                    <div class="comment_content">
                        <h1 class="comment_title">
                        BetterLoveScott
                        </h1>
                        <p class="commenttext">Хватит писать что я додик! Я вообще то тонка натура, художественноя личность и вообще я на вас всех кинул жалобу, бее)</p>
                            
                    
                    
                        </div>
            </div>
            <div class="comment_form">
                
                <img src="pixxx/БэтсБ.jpg"  class="comment_avatar"style="width: 50px; height: 50px;border: 1px solid #FF9700;border-radius: 10px;">
 
                    <div class="comment_content">
                        <h1 class="comment_title">
                        bestBatman
                        </h1>
                        <p class="commenttext">Тупо лучше всех.</p>
                            
                    
                    
                        </div>
            </div>
            <div class="comment_form">
                
                <img src="pixxx/shego.jpg"  class="comment_avatar"style="width: 50px; height: 50px;border: 1px solid #FF9700;border-radius: 10px;">
 
                    <div class="comment_content">
                        <h1 class="comment_title">
                        GREENandSLIM
                        </h1>
                        <p class="commenttext">Мой номер: 234 567-89-00. Жду приглашений в кафешку.</p>
                            
                    
                    
                        </div>
            </div>
        </div>
    </div>
  
<div class="Rec_Form_wrap" style="display:flex; flex-wrap: wrap;" >
   
<label>РЕКОМЕНДАЦИИ ОТ СОЗДАТЕЛЕЙ САЙТА:</label>
    <div class="rec_ava_wrap">
        <div class="Avatars">
            <img src="pixxx/arsava.jpg "style="width: 200px;height: 200px; "><p>MaidOchka</p>
            <img src="pixxx/АваКостя.jpg"style="width: 200px;height: 200px; " ><p>Pepel_Zbei</p>
        </div>
            <div class="rectitles_catalog">

                <div class="reccatalogitems">
                    <div class="product">
                        <a href="mangapage.php?id=25"><img src="pixxx/h7QBAJHY1Wvr_250x350.jpg" class="rec_img"style="width: 150px; height: 215px;border-radius: 5px;"> 
                            <div class="mangacontent">
                            <h1 class="manga_title">Koisuru kiseichuu</h1> 
                                </div>
                            </a> 
                    </div>
                </div>
                <div class="reccatalogitems">
                    <div class="product">
                        <a href="mangapage.php?id=25"><img src="pixxx/oT8kIff9jDi3_250x350.jpg" class="rec_img"style="width: 150px; height: 215px;border-radius: 5px;"> 
                            <div class="mangacontent">
                            <h1 class="manga_title">Jumyou wo K...</h1> 
                                </div>
                            </a> 
                    </div>
                </div>
                <div class="reccatalogitems">
                    <div class="product">
                        <a href="mangapage.php?id=36"><img src="pixxx/nhk.jpg" class="rec_img"style="width: 150px; height: 215px;border-radius: 5px;"> 
                            <div class="mangacontent">
                            <h1 class="manga_title">NHK ni Youkoso!</h1> 
                                </div>
                            </a> 
                    </div>
                </div>
                <div class="reccatalogitems">
                    <div class="product">
                        <a href="mangapage.php?id=25"><img src="pixxx/k3rMMqvaE4Jf_250x350.jpg" class="rec_img"style="width: 150px; height: 215px;border-radius: 5px;"> 
                            <div class="mangacontent">
                            <h1 class="manga_title">Watamote</h1> 
                                </div>
                            </a> 
                    </div>
                </div>
                <div class="reccatalogitems">
                    <div class="product">
                            <a href="mangapage.php?id=34"><img src="pixxx/LUfaqwjrkIJR_250x350.jpg" class="rec_img"style="width: 150px; height: 215px;border-radius: 5px;">
                            <div class="mangacontent">
                            <h1 class="manga_title">Oyasumi Punpun</h1> 
                                </div>
                            </a> 
                    </div>
                </div>
                <div class="reccatalogitems">
                    <div class="product">
                            <img src="pixxx/1492177456_0.08465200.jpg" class="rec_img"style="width: 150px; height: 215px;border-radius: 5px;">
                            <div class="mangacontent">
                            <h1 class="manga_title">All-Star Supe...</h1> 
                                </div>
                            </a> 
                    </div>
                </div>
                <div class="reccatalogitems">
                    <div class="product">
                            <img src="pixxx/7NI7W9oAS3OJ_250x350.jpg" class="rec_img"style="width: 150px; height: 215px;border-radius: 5px;">
                            <div class="mangacontent">
                            <h1 class="manga_title">Evangelion</h1> 
                                </div>
                            </a> 
                    </div>
                </div>
                <div class="reccatalogitems">
                    <div class="product">
                            <img src="pixxx/1468201662_0.12672000.jpg" class="rec_img"style="width: 150px; height: 215px;border-radius: 5px;">
                            <div class="mangacontent">
                            <h1 class="manga_title">Batman: The...</h1> 
                                </div>
                            </a> 
                    </div>
                </div>
            
                <div class="reccatalogitems">
                    <div class="product">
                            <img src="pixxx/1572045610_0.84611400.jpg" class="rec_img"style="width: 150px; height: 215px;border-radius: 5px;">
                            <div class="mangacontent">
                            <h1 class="manga_title">Harleen</h1> 
                                </div>
                            </a> 
                    </div>
                </div>
                <div class="reccatalogitems">
                    <div class="product">
                            <img src="pixxx/1631684537_0.49536200.jpg" class="rec_img"style="width: 150px; height: 215px;border-radius: 5px;">
                            <div class="mangacontent">
                            <h1 class="manga_title">It's Jeff</h1> 
                                </div>
                            </a> 
                    </div>
                </div>
            </div>
    </div>
</div>
              
 </div>
</main>   
<footer class="footer">
<div class="footer_content">
        <div class="razdeli">
        <h2>РАЗДЕЛЫ<h2>
        <p>ПРАВИЛА САЙТА</p>
        <p>DMCA</p>
        <p>COPYRYGHT</p>
        </div>

        <div class="razdeli">
        <h2>ИНФО</h2>
        <p>ANDROID</p>
        </div>

        <div class="razdeli">
        <h2>КОНТАКТЫ</h2>
        <a href="https://vk.com/mi.tut.prosta2"target="_blank"><img src="int/twicon.png" ></a> 
        <a href="https://vk.com/mi.tut.prosta2"target="_blank"><img src="int/vkicon.png" ></a> 
        </div>
</div>



</footer>
</div>   
    </body>
    </html>