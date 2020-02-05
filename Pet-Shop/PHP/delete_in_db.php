<?php
include 'Banner_menu.php';
$delete_id = $_POST['Code']; // get to variables /*รับค่าจาก Link*/
$vbottom = $_POST['valuesubmit']; 
$sql=" DELETE FROM list WHERE Code=" .$delete_id ; /* SQL delete*/

$con= mysqli_connect("localhost","root","","bestcat");
If($vbottom=="OK"){
If (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="DELETE FROM product WHERE Code=" .$delete_id ; /* SQL delete*/
if (!mysqli_query($con,$sql)) { // รัน SQL
 die('Error: ' . mysqli_error($con)); /*แสดง error ถ้าท างานไม่ได้*/
}
 //echo "1 record added"; // ลบ // ออก หากต้องการเห็นการท างาน
mysqli_close($con);
} // จบถ้ากดปุ่ ม ตกลง
header('location: Menu_delete.php'); 

include 'Footer_menu.php';
?>