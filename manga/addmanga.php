 
<html>

<head>
    <meta charset="UTF-8">
    <title>Add manga</title>
    <link rel="stylesheet" href="addmanga.css">
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
 


 
<form action="querty/addmangaq.php" method="POST">
<div class="lines_wrap">
        <div class="lines_content">
                <div class="line_item">
                <label for="coverinput">Обложка</label> <input type="file" id="coverinput" name="cover" >
                </div>
                <div class="line_item">
                <input type="text" name="orname" id="ornametext" placeholder="оригинальное название "/>
                </div>
                <div class="line_item">
                <input type="text" name="runame" id="runametext" placeholder="название на русском" />
                </div>
                <div class="line_item">
                <input type="text" name="enname" id="ennametext" placeholder="название на английском"/>
                </div>
                <div class="line_item">
                <input type="text" name="titledescr" id="titledescr" placeholder="описание тайтла"/>
                </div>
                <div class="line_item">
                <select type="text" name="type" id="typeid" style="color: #616161;" >
                        <option value="1">манга</option>
                        <option value="2">комикс</option>
                 </select>
                </div>
                <div class="line_item">
                <input type="text" name="year" id="yearid" placeholder="год выпуска"  />
                </div>
                <div class="line_item">
                <input type="text" name="author" id="authorid" placeholder="автор|сценарист" />
                </div>
                <div class="line_item">
                <input type="text" name="artist" id="artistid" placeholder="художник"/>
                </div>
                <div class="line_item">
                <p>теги</p>

                <input type="checkbox" value="1"name="tags[]">повседневность
                <input type="checkbox" value="2"name="tags[]">детектив
                <input type="checkbox" value="3"name="tags[]">трагедия
                <input type="checkbox" value="4"name="tags[]">романтика
                <input type="checkbox" value="5"name="tags[]">комедия 
                </div>
                
                
                </div>
                <div class="submit">
                 <button type="submit" name="submit" id="buttonid"><p>Готово</p></button>
                
        </div>

 
</div>
</form>
</body>
</html>

 