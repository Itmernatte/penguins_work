<?php
     $rash = ['jpeg','svg','png','jpg'];
    $newTitle= $_POST["newTitle"];
    $newsText = $_POST["newsText"];
    $newsCat = $_POST["newsCat"];
    if (strlen($newTitle) > 20) {
        echo "Ошибка: Название новости не должно превышать 20 символов. " ;
        echo "<br>";
    }
    if (!is_string($newTitle)) {
        echo "Ошибка: Название новости должно быть строкой. ";
        echo "<br>";
    }

    if (!is_string($newsText)) {
        echo "Ошибка: Текст новости должен быть строкой. " ;
        echo "<br>";
    }

    if (!is_string($newsCat)) {
        echo "Ошибка: Категория новости должна быть строкой. ";
        echo "<br>";
    }

    if (strlen($newTitle) == 0) {
        echo 'Ошибка: строка с заголовком пустая,введите данные!';
        echo "<br>";
    }
    if (strlen($newTitle) == 0) {
        echo 'Ошибка: строка с текстом пустая,введите данные!';
        echo "<br>";
    }
    $newsImg = $_FILES['newsImg'];
    $destination = "images/" . $newsImg['name'];
    $filename = $newsImg["tmp_name"];
    $check_upload = move_uploaded_file($filename, $destination);
    if ($check_upload) {
        echo "Изображение успешно загружено. ";
        echo "<br>";
    } else {
        echo "Ошибка при загрузке изображения.";
    }

     if (in_array(explode('.', $newsImg['name'])[1], $rash)){
        echo "Изображение!";
        
     } else {
         echo "Ошибка!";
     }

?>