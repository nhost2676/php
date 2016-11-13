<?php
// Phương thức Get trong php
// Phương thức GET rất dễ nhận thấy đó là trên URL sẽ kèm theo dữ liệu mà chúng ta muốn gửi
/* Client gửi lên:
Phương thức GET là phương thức gửi dữ liêu thông qua đường dẫn URL nằm trên thanh địa chỉ của Browser.
Server sẽ nhận đường dẫn đó và phân tích kết quả trả về cho bạn: Thông tin phía sau (?) chính là dữ liệu mà Client gửi lên
VD: Với URL: abc.com?id=12 thì Server sẽ nhận được giá trị id = 12
Để truyền nhiều dữ liệu ta dùng & để phân tách các cặp giá trị.
*Server nhận dữ liệu:
Tất cả các dữ liệu mà Client gửi lên bằng phương thức GET đều được lưu trong một biến toàn cục mà PHP tự tạo ra đó là biến $_GET,
  biến này là kiểu mảng kết hợp lưu trữ danh sách dữ liệu từ client gửi lên theo quy luật key => value.
  Ví du với URL freetuts.net?id=12&title=method_get thì dữ liệu sẽ được lưu trong biến $_GET dưới dạng:
*/
$_GET = array(
  'id' => 12 ,
  'title' => 'mothod_get');
// Lấy dữ liệu
// Lấy ID
echo $_GET['id'];
echo "<br>",$_GET['title'];

?>
