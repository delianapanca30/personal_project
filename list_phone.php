</<?php 
include ('connection.php');
$query = 'select id, phone_name, price harga from tbl_phone';
$result = mysql_query ($query) or die (mysql_error());
$data = array();
while ($row = mysql_fetch_object($result))
	{$data['handphone'][]=$row;}
echo json_encode($data);
?>