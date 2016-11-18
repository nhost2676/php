<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>UPLOAD FILE</title>
  </head>
  <body>
    <form method="post" action="" enctype="multipart/form-data">
      <input type="file" name="avartar" /><br/>
      <input type="submit" name="upclick" value="Upload"/>
    </form>
      <?php
        //Xử lí file upload
        //Nếu người dùng nhấp vào nút upload
        if (isset($_POST['upclick'])) {
          //Nếu ng.dùng chọn file để upload
          if (isset($_FILES['avartar'])) {
            //Nếu file upload bị lỗi(error > 0)=>>File bị lỗi
            if ($_FILES['avartar']['error'] > 0) {
              echo "File Error";
            }
            else {
              //Upload file
              move_uploaded_file($_FILES['avartar']['tmp_name'],'./upload/'.$_FILES['avartar']['name']);
              echo "File uploaded";
            }
          }
          else {
            echo 'No file choiced';

          }
        }
        ?>
  </body>
</html>
