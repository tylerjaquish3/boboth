<?php
date_default_timezone_set('America/Los_Angeles');
//define('URL', 'https://bobothvision.com');
define('URL', 'http://boboth.local');

function getUser($id)
{
	include 'datalogin.php';

	$sql = "SELECT * FROM admin WHERE id = $id";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_array($result)) 
	{
		return $row['user_name'];
	}
}