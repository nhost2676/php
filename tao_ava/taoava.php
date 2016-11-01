<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tạo avatar theo tên với Javascript và PHP &bull; Freetuts.net</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <style>
 	* {padding: 0; margin: 0; color: #333; font-size: 14px;}
	.clearfix {clear: both;}
	.box-create-avt {width: 300px; max-width: 100%; margin: 20px auto; text-align: center;}
	.box-create-avt h2 {color: #333; font-weight: normal; font-size: 30px;}
	.box-create-avt input[type=text] {float: left; margin-top: 10px; width: calc(50% - 16px); outline: 0; border: 1px solid #ccc; padding: 5px 7px; color: #333;}
	.box-create-avt #last_name {border-left: 0;}
	.box-create-avt button {background-color: #428bca; color: #fff; padding: 5px 7px; font-size: 14px; border: 1px solid #428bca; margin-top: 10px; cursor: pointer; outline: 0;}
	#canvas {margin-top: 100px;}
    </style>
</head>
<body>
    <div class="box-create-avt">
        <h2>Tạo ảnh theo tên</h2>
        <form method="POST" id="formCreateAvt" onsubmit="return false;">
            <input type="text" placeholder="Họ" id="first_name">
            <input type="text" placeholder="Tên" id="last_name">
            <button id="submit_form_signup">Tạo ảnh</button>
            <div class="clearfix"></div>
        </form>
        <canvas id="canvas" width="80" height="80"></canvas>
    </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script>
// Bắt sự kiện khi click vào nút Tạo tài khoản
$('#submit_form_signup').on('click', function() {
    // Lấy giá trị gán vào các biến và xử lý
    $first_name = $('#first_name').val().substr(0, 1).toUpperCase();
    $last_name = $('#last_name').val().substr(0, 1).toUpperCase();
             
    // Nếu field họ hoặc tên để trống
    if ($first_name == '' || $last_name == '')
    {
        alert('Vui lòng nhập họ tên !');
    }
    // Ngược lại
    else
    {
        // Khai báo các biến canvas
        var canvas = document.getElementById('canvas');
            var context = canvas.getContext('2d');
 
            // Lấy x, y căn giữa canvas
            var x = canvas.width / 2;
            var y = canvas.height / 2;
 
        // Phủ màu cho canvas
            context.rect(0, 0, 80, 80);
            context.fillStyle = "#428bca";
        context.fill();
 
        // Viết tắt họ và tên lên canvas
            context.font = "30px Arial";
            context.textAlign = "center";
            context.fillStyle = "white";
            context.fillText($first_name + $last_name, x, y + 10);
 
            dataAvt = canvas.toDataURL(); // Lấy dữ liệu canas
 
        // Gửi dữ liệu canvas
            $.ajax({
                   type: "POST", // Phương thức
                   url: "create_avt.php", // Đường dẫn
               // Dữ liệu
              data: { 
                   dataAvt: dataAvt
              }
              // Nếu gửi dữ liệu thành công
              }).done(function() {
                    alert('Tạo ảnh thành công !');
              });
    }   
});        
    </script>
</body>
</html>