<html>
<body>
<?php
include 'Banner_menu.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bestcat";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Code,Breed,Farm,Price,cust_name,cust_code FROM product LEFT JOIN customer ON product.cust_id=customer.cust_code";
$result = $conn->query($sql);
//$sql = "SELECT COUNT(Code) FROM product";  
//$i = 0;
//$sum = 0;
if ($result->num_rows > 0) {
	 echo "<center><h1><font color=#ff66cc>Selling Cat's List</font></h1></center><table border='2' bordercolor='ff6699' align='center' width='80%' height='50%' bgcolor='ffccff'><tr><center>
	 <th><font color='3399ff'>Code</font></th>
	 <th><font color='3399ff'>Breed</font></th>
	 <th><font color='3399ff'>Farm</font></th>
	 <th><font color='3399ff'>Price</font></th>
	 <th><font color='3399ff'>Customer</font></th>
	 <th><font color='3399ff'>Command</font></th>
	 </center></tr>";
	while($row = $result->fetch_assoc()) {
		
		echo "<tr><td><center>" . $row['Code']. "</td></center>
		<td><center>". $row['Breed']. "</td></center>
        <td><center>" . $row['Farm'] . "</td></center>
		<td><center>" . $row['Price'] . "</td></center>
		<td><center>" . $row['cust_name'] . "</td></center>";
		echo "<td><center><a href='Select_join.php?sell_id=". $row["Code"]."&sell_name=". $row["Breed"]."'>Sell</a></td></center>
		</tr>";
     }
	 echo "</table>";
} 

$conn->close();
?>
</body>
</html>

<?php include 'Footer_menu.php';?>  