<?php include 'Banner_menu.php'; ?>
<html>
<body>
<center><form action=" Menu_search.php" method="post">
  <table>
    <tr>
      <th><font color=#ff99cc>Search Cats</font>
     <input type="text" name="Search">
	 <input type="submit" value="Search" > 
	  </th>
    </tr>
  </table>
</form></center>

<?php

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "bestcat";

   // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$totallist = "0";
$totalprice = "0";

if(isset($_POST['Search'])) { $s_word=$_POST['Search']; 
$sql = "SELECT * FROM product WHERE Code LIKE '%".$s_word. "%' or Image LIKE '%".$s_word. "%' or Breed LIKE '%".$s_word."%' or Farm LIKE '%".$s_word. "%' or Price LIKE '%".$s_word. "%' ";

}else{ 
	
	$sql="SELECT * FROM `product`"; } // ��ҷ ҧҹ��� ��á �����ʴ��� ����




$query = mysqli_query($conn,$sql);

     echo "<table border='2' bordercolor='ff6699' align='center' width='80%' height='50%' bgcolor='ffccff'><tr><center>
	 <th><font color='3399ff'>Code</font></th>
	 <th><font color='3399ff'>Breed</font></th>
	 <th><font color='3399ff'>Farm</font></th>
	 <th><font color='3399ff'>Price</font></th>
	 <th><font color='3399ff'>Customer</font></th>
	 </center></tr>";
     // output data of each row
     while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
		 $totallist = $totallist + 1;
		 $totalprice = $totalprice + $result["Price"];
         echo "<tr>
		 <td><center>" . $result["Code"]. "</td>
		 <td><center><img src=".$result["Image"]." width='150' height='150' border='0' alt=''></td>
		 <td><center> " . $result["Breed"]. "</td>
		 <td><center> " . $result["Farm"]. "</td><td><center> " . $result["Price"]. "</td>";
		 
		 echo "</tr>";	
     }
?>

<tr><td colspan ="3">Total = <?php echo $totallist; ?></td>
<td colspan ="2">Total Price = <?php echo $totalprice; ?></td></tr>
</table><br><br>

<?php
mysqli_close($conn);

?>
</body>
</html>
<?php include 'Footer_menu.php'; ?>