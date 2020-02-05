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

$sql = "SELECT * FROM product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	 echo "<center><h1><font color=#ff66cc>Delete Cat's List</font></h1></center><table border='2' bordercolor='ff6699' align='center' width='80%' height='50%' bgcolor='ffccff'><tr><center>
	 <th><font color='3399ff'>Code</font></th>
	 <th><font color='3399ff'>Image</font></th>
	 <th><font color='3399ff'>Breed</font></th>
	 <th><font color='3399ff'>Farm</font></th>
	 <th><font color='3399ff'>Price</font></th>
	 <th><font color='3399ff'>Command</font></th>
	 </center></tr>";
	while($row = $result->fetch_assoc()) {
		$id=$row['Code'];
		echo "<tr><td><center>" . $row['Code']. "</td></center>
		<td><center><img src=" . $row['Image']." width='200' height='150' border='0' alt=''></td></center>
		<td><center>". $row['Breed']. "</td></center>
        <td><center>" . $row['Farm'] . "</td></center>
		<td><center>" . $row['Price'] . "</td></center>
		<td><center><a href='delete_confirm.php?delete_id=";
		echo $id;
		echo "'>Delete</a></td></center>
		</tr>";
     }
	 echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
include 'Footer_menu.php';
?>  