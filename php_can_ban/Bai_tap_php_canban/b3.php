//Viết PHP script để dừng thực thi chương trình trong một khoảng thời gian đã cho.
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dừng chương trình</title>
  </head>
  <body>
    <?php
      echo "</br>";
      //Thời gian hiện tại
      echo date('h:i:s'),'</br>';
      //Dừng lại 10s đi:
      sleep(10);
      // Tiếp tục chương trình
      echo date('h:i:s');
    ?>
  </body>
</html>
