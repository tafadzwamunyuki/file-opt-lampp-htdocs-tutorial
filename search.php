<table bor>
	<tr>
		<th>Name</th>
		<th>Email</th>
		
	</tr>
</table>


<?php
$conn = mysqli_connect("localhost","root","","tutorial");
$set = $_POST['search'];
if($set){
	$show = "SELECT *FROM person where name = '$set'";
	$result = mysqli_query($conn,$show);
	while($rows = mysqli_fetch_array($result)){
		echo $rows "<td>";
		echo $rows "<tr>";
		echo $rows['name'];
		echo $rows "<td>";
		echo $rows "<tr>";
		echo $rows['id'];
		echo"<br/>";
		
	}
}else{
	echo "Nothing found";
}


?>
