<?php  
$connect = mysqli_connect("localhost","root","","app_Apg");
$sql = "select * from get";
$result = mysqli_query($connect,$sql);
$datalist = [];
while ($row = mysqli_fetch_array($result,1)) {
	$datalist[] = $row;
}
echo json_encode($datalist);
?>