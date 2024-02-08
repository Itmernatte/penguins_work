<?php

//$_GET //ассоциативный массив, который хранит значения переданные методом GET в виде
      //ключ => значение, где ключ - это значение атрибута name, а значение - это введенные в соответствующее поле данные

    $userName = $_POST["userName"];
    $userAge = $_POST["userAge"];
    echo "Привет, $userName! Твой возраст: $userAge лет.";
    if($userAge < 18){
        header("Location: child.php");
    }else{
        header("Location: adult.php");
    }
    //echo "<script>location.href='child.php'</script>" - переадресация на др. страницу
    
?>