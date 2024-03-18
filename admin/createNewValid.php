  <?php

  include "../connect.php";

  $title = isset($_POST['newTitle']) ? $_POST['newTitle'] : false;
  $text = isset($_POST['newsText']) ? $_POST['newsText'] : false;
  $file = isset($_FILES['newsImg']["tmp_name"]) ? $_FILES['newsImg'] : false;
  $category_id = isset($_POST['newsCat']) ? $_POST['newsCat'] : false;

  function check_error($error)
  {
    return "<script> alert('$error');location.href ='/admin';</script>";
  }


  if ($title and $file and $category_id) {
    if (strlen($title) > 50)
      echo check_error("Название не должно превышать 50 символов");
    else {
      $file_name = $file["name"];
      $result = mysqli_query($con, "INSERT INTO news (title, content, image, category_id) VALUES ('$title','$text', '$file_name',$category_id)");
      if ($result) {
        move_uploaded_file($file["tmp_name"], "imeges/news/$file_name");
        echo check_error("Новость успешно создана:");
      } else
        echo check_error("Произошла ошибка:" . mysqli_error($con));
    }
  } else {
    echo check_error("Все поля должны быть заполнены!");
  }

  ?>