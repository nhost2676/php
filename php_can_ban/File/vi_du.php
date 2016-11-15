<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Xử lí file</title>
  </head>
  <body>
    <form method="post">
      Input: <input type="text" name="file_name" value=""><br/>
      <input type="submit" name="click" value="Nhập!"><br/>
      <?php
        if (isset($_POST['click'])) {
          $path =$_POST['file_name'];}
        // Mở một file, ta dùng dấu @ đặt trước hàm fopen
        // để phòng trường hợp đường dẫn $path ta truyền
        // vào bị sai nó sẽ không bung lỗi ra màn hình.
        // Đường dẫn $path có thể là đường dẫn tương đối
        // hoặc tuyệt đối đều được
        //Kiểm tra file mở thành công không
        $fp = @fopen($path,'r');
        if ($fp) {
          echo "Mở file thành công</br>";
        }
        else {
          echo "Mở file không thành công</br>";
        }

        // Đọc từng kí tự
        if (!$fp) {
          echo "File không tồn tại</br>";
        }
        else {
          while (!feof($fp)) {
            echo fgetc($fp);
          }
        }

        // Đọc từng dòng
        echo "</br>";
        $op = @fopen($path,'r');
        if (!$op) {
        echo "File không tồn tại</br>";
        }
        else {
          while (!feof($op)) {
            echo fgets($op);
          }
        }

      // Đọc hết file
      echo "</br>", fread(@fopen($path,'r'),@filesize($path)), "</br>";

      //Ghi file
      $of = @fopen($path,'a');
      if (!$of){
        echo "File mở không thành công";
      }
      else {
        $data = "</br>Nội dung ghi vào file.";
        fwrite($of, $data);
        fclose($of);
      }
      ?>
    </form>
  </body>
</html>
