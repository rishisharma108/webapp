<?php
include 'Banner_menu.php';
$vbottom = $_POST['valuesubmit'];
$s_word = $_POST['f_word'];
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
$sql="SELECT * FROM product WHERE Code LIKE '%".$s_word. "%' or Image LIKE '%".$s_word. "%' or Breed LIKE '%".$s_word."%' or Farm LIKE '%".$s_word. "%' or Price LIKE '%".$s_word. "%' ";

}else{ $sql="SELECT * FROM product";

}
if (!mysqli_query($con,$sql)) { 
	die('Error: ' . mysqli_error($con)); 
}
//echo $edit_id; // ลบ // ออก หากต้องการเห็นการท างาน
mysqli_close($con);
} 
header('location: Menu_update.php'); 

include 'Footer_menu.php';
?>