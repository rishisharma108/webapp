<?php
include 'Banner_menu.php';
$vbottom = $_POST['valuesubmit'];
$edit_id = $_POST['edit_id'];
$Code = $_POST['Code'];
$Image = $_POST['Image'];
$Breed = $_POST['Breed'];
$Farm = $_POST['Farm'];
$Price = $_POST['Price'];

$con= mysqli_connect("localhost","root","","bestcat");
If($vbottom=="OK"){
If (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="UPDATE Product SET"
	. " Code = $Code,"
	. " Image = '$Image',"
	. " Breed = '$Breed',"
	. " Farm = '$Farm',"
	. " Price = $Price "
	. " WHERE Code=".$edit_id; /* SQL delete*/
if (!mysqli_query($con,$sql)) { // รัน SQL
 die('Error: ' . mysqli_error($con)); /*แสดง error ถ้าท างานไม่ได้*/
}
//echo $edit_id; // ลบ // ออก หากต้องการเห็นการท างาน
mysqli_close($con);
} // จบถ้ากดปุ่ ม ตกลง
header('location: Menu_update.php'); 

include 'Footer_menu.php';
?>