<?php 
include "connect.php"; 

$query_category = "SELECT * FROM categories"; 
$categories=mysqli_fetch_all( mysqli_query($con, $query_category )); 
include "header.php";
?> 

<!DOCTYPE html> 
<html> 
<head> 
    <meta charset='utf-8'> 
    <meta http-equiv='X-UA-Compatible' content='IE=edge'> 
    <title>Page Title</title> 
    <meta name='viewport' content='width=device-width, initial-scale=1'> 
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'> 
    <script src='main.js'></script> 
</head> 
<body> 
    <main>  
        <div class="text-main">  
            <?php foreach($categories as $category  ){  
                
                echo "<li><a href='#'>$category[1]</a></li>";  
                echo "<hr>";  
                }  
            ?>  
        </div>  
    </main>  
        <form action="createNewValid.php" method="post" enctype="multipart/form-data">  
            <label for="newsCat">Категории:</label>  
            <select id="newsCat" name="newsCat">  
        <?php  
        foreach ($categories as $cat){ 
            $id_cat = $cat[0];  
            $name = $cat[1]; 

            echo "<option value ='$id_cat'> $name </option>"; 
        } 
        ?> 
                
            </select><br><br> 
            <label for="newTitle" >Заголовок:</label>  
    <input type="text" id="newTitle" name="newTitle" class="zagolovok"><br><br>  

            <label for="newsText" >Текст:</label><br>  
            <input type="text" id="newsText" name="newsText" rows="4" cols="50" class="zagolovok" placeholder="Введите свою почту"></textarea><br><br>  
                
            <label for="newsImg">Изображение:</label>  
            <input type="file" id="newsImg" name="newsImg" accept="image/*" ><br><br>  

            <input type="submit" value="Отправить" class="submit-button">  
        </form>  
            

</body> 
</html>