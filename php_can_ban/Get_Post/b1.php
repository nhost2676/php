// Tạo một form để nhận và hiển thị tên đăng nhập
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
  </head>
  <body>
    <form  method="post">
      Tên đăng nhập:<input type="text" name="ID" value=""/><br/>
      <input type="submit" name = 'click' value="OK"/><br/>
      <?php
        if (isset($_POST['click'])) {
          echo "Chào mừng ",$_POST['ID'];
        }
      ?>
    </form>
  </body>
</html>
