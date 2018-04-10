<?php
$name = $_POST["name"];
$name_user = $_POST["name_user"];
$password = $_POST["password"];
$ip = $_POST["ip"];

include 'conn.php';
//echo polacz($name, $name_user, $password, $ip); //returns omg lol;
//UPDATE wiadomosci SET status="nie wyslano";
$mysql_qry = "SELECT *  FROM klienci WHERE status='nie wyslano'";


$result = mysqli_query(polacz($name, $name_user, $password, $ip), $mysql_qry);
if(mysqli_num_rows($result)>0)
{
	//$row = mysqli_fetch_array($result);
	
while ($wiersz = $result->fetch_assoc()) 
                 {
                  print $wiersz['id'].";".$wiersz['numer'].";".$wiersz['opis']."\n";
                 }
				 
}
else{
	echo "brak";
}

?>
