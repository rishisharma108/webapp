<html>
<body>
<?php include 'Banner_menu.php';?>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bestcat";
$Select_id = $_GET['sell_id'];
$Select_name = $_GET['sell_name'];
$Show_select = $Select_id. $Select_name;

$conn = new mysqli($servername, $username, $password, $dbname);
//$result = mysqli_query($con,"SELECT * FROM product");
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `customer`";
$result = mysqli_query($conn,$sql);
	
?>


<center><form action="Save_join.php" method="post"> 
 <br>
 <table bordercolor=#ff3399 border=1 bgcolor = #ffccff  width='40%' height='30%'>
<tr>
	<td>
	<center>
	<br>
<table>
	
  <tr>
	<td>	
  <font color=#ff3399>Code - Cat's Breed : </font><br><br>
  </td>
	<td>
	<center>
	<input type="text" name="name" value="<?php echo $Show_select; ?>"readonly>
	<input type="hidden" name="cat_id" value="<?php echo $Select_id; ?> "><br><br>
	</td>
  </tr>

<?php 
$i="1";
while($row = $result->fetch_assoc()) { ?>

<tr><td><font color=#ff3399>Customer : </font></td><td><br><input type="radio" name="id" Value="<?php echo $i ?>" size=25 readonly><?php echo $row["cust_code"] ?> <?php echo $row["cust_name"] ?> </td></tr>

<?php  
$i=$i+1; } ?>

</table>


<br>
<center>
<input type="submit" name="valuesubmit" value="Save" > 
<input type="button" onClick="window.location='Menu_join.php';" value="Cancel">
<br><br>
	</td>
</tr>
</table>

</form></center><br>
<?php include 'Footer_menu.php'; ?>
</body>
</html>