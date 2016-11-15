<?php
$arr = array(
  'họ' => 'Đinh',
  'tên lót' => 'Nhật',
  'tên' => 'Nam');
$array_keys  = array('Họ', 'tên lót', 'tên');
$array_values = array('Đinh', 'Nhật', 'Nam');
$arr_same=array(1, 2, 1, 2, 1, 4);
$input = array(1,2,3);
/* 1.array_change_key_case($arr,$case) :Chuyển tất cả các key trong mảng $array sang chữ hoa nếu $case = 1 và sang chữ thường nếu $case = 0.
 Ta có thể dùng hằng số CASE_UPPER thay cho số 1 và CASE_LOWER thay cho số 0.*/
print_r(array_change_key_case($arr,1));
/* 2.  array_combine($array_keys, $array_values)
    Trộn 2 mảng $array_keys và $array_values thành một mảng kết hợp với $array_keys là danh sách keys,
    $array_value là danh sách value tương ứng với key. Điều kiện là 2 mảng này phải bằng nhau.*/
echo "</br>";
print_r(array_combine($array_keys, $array_values));
/* 3.  array_count_values ( $array )
Đếm số lần xuất hiện của các phần tử giống nhau trong mảng $array và trả về một mảng kết quả.*/
echo "</br>";
print_r(array_count_values($arr_same));
/* 4. array_push(&$array, $add_value1, $add_value2, $add_value…)
Thêm vào cuối mảng $array một hoặc nhiều phần tử với các giá trị tương ứng biến $add_value truyền vào.*/
echo "</br>";
array_push($arr,'12');
print_r($arr);
/* 5. array_pop(&$array)
Xóa trong mảng $array phần tử cuối cùng và trả về phần tử đã xóa.*/
echo "</br>";
$lop = array_pop($arr);
print_r($arr);
echo '</br>',$lop,'</br>';
/*6. array_pad($array, $size, $value)
Kéo dãn mảng $array với kích thước là $size, và nếu kích thước truyền vào lớn hơn kích thước mảng $array thì giá trị $value được thêm vào,
ngược lại nếu kích thước truyền vào nhỏ hơn kích thước mảng $array thì sẽ giữ nguyên. Nếu muốn giãn ở cuối mảng thì $size có giá trị dương,
nếu muốn giãn ở đầu mảng thì $size có giá trị âm.*/
// Giãn thành 5 phần tử ở cuối mảng và
// các phần tử giãn có giá trị là 5:
$result = array_pad($input, 5, 0);
print_r($result);
echo "</br>";
// Giản thành 7 phần tử ở đầu mảng
//  và các phần tử giãn có giá trị -1
$result = array_pad($input, -7, -1);
print_r($result);
echo "</br>";
// Giãn thành 2 phần tử nhưng mảng $input
// lại có 3 phần tử nên sẽ không được xử lý
$result = array_pad($input, 2, "noop");
print_r($result);
/*7. array_shift(&$array)
Xóa phần tử đầu tiên ra khỏi mảng $array và trả về phần tử vừa xóa đó. */
echo "</br>";
$ho = array_shift($arr);
print_r($arr);
echo "</br>",$ho,'</br>';
/*9. is_array($variable).
Kiểm tra một biến có phải kiểu mảng hay không, kết quả trả về true nếu phải và false nếu không phải.*/
/*10. in_array($needle, $haystackarray)
Kiểm tra giá trị $needle có nằm trong mảng $haystackarray không. trả về true nếu có và flase nếu không có.*/
/*11. array_key_exists($key, $searcharray)
Kiểm tra key $key có tồn tại trong mảng $searcharray không, trả về true nếu có và false nếu không có.*/
/*12.array_unique( $array )
Loại bỏ giá trị trùng trong mảng $array.*/
print_r(array_unique($arr_same));
echo "</br>";
/*13.array_values ($array )
Chuyển mảng $array sang dạng mảng chỉ mục.*/
print_r(array_values($arr))
?>
