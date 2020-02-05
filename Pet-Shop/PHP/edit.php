<?php include 'Banner_menu.php'; ?>

<!DOCTYPE html>
<html>
<body>

<center><table bordercolor=#ff3399 border=1 bgcolor = #ffccff  width='40%' height='30%'>
<tr>
	<td><center><h1><center><font color=#ff66cc>Update ?</font></center></h1>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bestcat";
$edit_id = $_GET['edit_id'];
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM product WHERE Code=".$edit_id    ;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
mysqli_close($conn);
?>

<form action="update.php" method="post">
<table>
<tr>
	<td>Code:</td>
	<td><input type="text" name="Code" value="<?php echo $row["Code"] ?>" readonly></td>
</tr>
<tr>
	<td>Image:</td>
	<td><input type="text" name="Image" value="<?php echo $row["Image"] ?>" style="border: 1px #ff6699 solid"></td>
</tr>
<tr>
	<td>Breed:</td>
	<td><input type="text" name="Breed" value="<?php echo $row["Breed"] ?>" style="border: 1px #ff6699 solid"></td>
</tr>
<tr>
	<td>Farm:</td>
	<td><input type="text" name="Farm" value="<?php echo $row["Farm"] ?>" style="border: 1px #ff6699 solid"></td>
</tr>
<tr>
	<td>Price:</td>
	<td><input type="text" name="Price" value="<?php echo $row["Price"] ?>" style="border: 1px #ff6699 solid"></td>
</tr>
</table> 
<input type="hidden" name="edit_id" value="<?php echo $edit_id; ?> "><br>
 
 <center><table>
 <tr>
	<td><center><input type="submit" value="OK" name="valuesubmit"></td>
	<td><center><input type="submit" value="Cancel" name="valuesubmit"></td>
 </tr>
 </table>
 </center>
 
 
 
</center>
</form>
</td>
</tr>
</table>
</td> 
</tr>
</table>
</center>

<?php include 'Footer_menu.php'; ?>