<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>THỰC HÀNH PHP PHƯƠNG THỨC POST</title>
  </head>
  <body>
      <form method ="POST">
        Username: <input type="text" name="username" value=""/> <br/>
        password: <input type="text" name="password" value=""/> <br/>
        <input type="submit" name="form_click" value ="Gửi dữ liệu"/>
        <?php
        // Nếu người dùng click vào button Gửi Dữ Liệu
       // Vì button đó tên là form_click nên đó cũng là
      // tên của key nằm trong biến $_POST
        echo "</br>";
        if (isset($_POST['form_click'])) {
          echo "Tên đăng nhập là: ", $_POST['username'];
          echo "</br>";
          echo "Mật khẩu là: ", $_POST['password'];
        }
        ?>
      </form>
  </body>
</html>
