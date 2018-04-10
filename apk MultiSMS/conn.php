<?php
function polacz($name, $name_user, $password, $ip){
	
	$db_name = $name;
	$mysql_username = $name_user;
	$mysql_password = $password;
	$server_name = $ip;

	$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
	if($conn)
	{
	}
	else
	{
		echo "Error_con";
	}
	$conn->query("SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
	$conn->query("SET CHARSET utf8");
return $conn;
}

?>