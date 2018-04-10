<?php


include 'conn.php';
$name = $_POST["name"];
$name_user = $_POST["name_user"];
$password = $_POST["password"];
$ip = $_POST["ip"];

$st = $_POST["st"];
$data = $_POST["data"];
$id = $_POST["id"];

$mysql_qry = "UPDATE klienci SET status = ('$st'), data_w = ('$data') WHERE klienci.id = ('$id')";



if(polacz($name, $name_user, $password, $ip)->query($mysql_qry) === TRUE)
{
echo "ok:".$st." ".$data." ".$id;
				 
}
else{
	echo "NO: ";
//	. $mysql_qry . "<br>" . polacz($name, $name_user, $password, $ip)->error;
}

?>
