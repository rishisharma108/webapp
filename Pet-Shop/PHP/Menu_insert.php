<?php include 'Banner_menu.php'; ?>
<html>
<body>
<form action="insert_to_db.php" method="post">

	<table align="center" border=1 bordercolor=#ff3399 bgcolor=#ffccff width="40%" height="30%">
	<tr><td>
	<table align="center">
	<tr>
		<td>Code:</td>
		<td><input type="text" name="Code" style="border: 1px #ff6699 solid"></td>
	</tr>
	<tr>
		<td>Image:</td>
		<td><input type="text" name="Image" style="border: 1px #ff6699 solid"></td>
	</tr>
	<tr>
		<td>Breed:</td>
		<td><input type="text" name="Breed" style="border: 1px #ff6699 solid"></td>
	</tr>
	<tr>
		<td>Farm:</td>
		<td><input type="text" name="Farm" style="border: 1px #ff6699 solid"></td>
	</tr>
	<tr>
		<td>Price:</td>
		<td><input type="text" name="Price" style="border: 1px #ff6699 solid"></td>
	</tr>
	</tr><tr>
	<br><center><th colspan="2"><input type="submit" value="Save" ></th></center>
	</tr></table>
	</table>
	
</form>

</body>
</html>
<?php include 'Footer_menu.php'; ?>