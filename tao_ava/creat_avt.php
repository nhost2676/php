<?php
    // Nhận dữ liệu canvas
    $avt = $_POST['dataAvt'];
 
    // Tìm kiếm và thay thế đường dẫn ảnh
    $avt = str_replace('data:image/png;base64,', '', $avt); 
    $avt = str_replace(' ', '+', $avt);
 
    $fileData = base64_decode($avt); // Mã hoá file dạng Base64
 
    // Tạo tên ảnh ngẫu nhiên để không bị trùng lặp 
    $charName = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $randName = substr(str_shuffle($charName), 0, 15);
 
    // Đường dẫn thư mục ảnh
    $fileName = 'C:\Users\onema\OneDrive\Pictures\AVT'. $randName . '.png';
 
    // Đặt dữ liệu canvas vào file ảnh
    file_put_contents($fileName, $fileData);
?>
