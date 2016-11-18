<<<<<<< HEAD
// Liệt kê các số chia hết cho n từ a ===> b
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Danh sách chia hết</title>
  </head>
  <body>
    <form method="post">
      Nhập số a: <input type="text" name="a" value=""/><br/>
      Nhập số b: <input type="text" name="b" value=""/><br/>
      Nhập số n: <input type="text" name="n" value=""/><br/>
      <input type="submit" name="click" value="IN KẾT QUẢ !!"><br/>
      <?php
        if (isset($_POST['click'])) {
          $a = $_POST['a'];
          $b = $_POST['b'];
          $n = $_POST['n'];
          $dem = 0;
          echo "Các số chia hết cho ",$n,':</br>';
          for ($i = $a; $i <= $b ; $i++) {
            if ($i % $n == 0) {
              echo $i,", ";
              $dem += 1;
            }
          }
          if ($dem == 0)  {
            echo "Không có số thoả.";
          }
        }
          //echo implode(', ',range($a, $b, $n));//implode dùng để chuyển mảng về chuỗi
      ?>
    </form>
  </body>
</html>
=======
// Liệt kê các số chia hết cho n từ a ===> b
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Danh sách chia hết</title>
  </head>
  <body>
    <form method="post">
      Nhập số a: <input type="text" name="a" value=""/><br/>
      Nhập số b: <input type="text" name="b" value=""/><br/>
      Nhập số n: <input type="text" name="n" value=""/><br/>
      <input type="submit" name="click" value="IN KẾT QUẢ !!"><br/>
      <?php
        if (isset($_POST['click'])) {
          $a = $_POST['a'];
          $b = $_POST['b'];
          $n = $_POST['n'];
          $dem = 0;
          echo "Các số chia hết cho ",$n,':</br>';
          for ($i = $a; $i <= $b ; $i++) {
            if ($i % $n == 0) {
              echo $i,", ";
              $dem += 1;
            }
          }
          if ($dem == 0)  {
            echo "Không có số thoả.";
          }
        }
          //echo implode(', ',range($a, $b, $n));//implode dùng để chuyển mảng về chuỗi
      ?>
    </form>
  </body>
</html>
>>>>>>> cff70dc20a330bf8f2436ff2f934ed18fc9de7c7
