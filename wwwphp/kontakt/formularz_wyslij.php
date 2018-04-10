<?php
session_start();
$test = $_POST['test'];
if($test!=1)
{
	header("Location: formularz.php");	
	exit();
}

$name =$_POST['name'];
$address =$_POST['adres'];
$PC_name =$_POST['PC_name'];
$telephon =$_POST['telephon'];
$email =$_POST['email'];
$message =$_POST['message'];

echo"<br/>";
echo"$name<br/>";
echo"$address<br/>";
echo"$PC_name<br/>";
echo"$telephon<br/>";
echo"$email<br/>";
echo"$message<br/>";

echo"<br/>";
echo"<br/>";

$name= htmlentities($name, ENT_QUOTES, "UTF-8");
$address= htmlentities($address, ENT_QUOTES, "UTF-8");
$PC_name= htmlentities($PC_name, ENT_QUOTES, "UTF-8");
$telephon= htmlentities($telephon, ENT_QUOTES, "UTF-8");
$email= htmlentities($email, ENT_QUOTES, "UTF-8");
$message= htmlentities($message, ENT_QUOTES, "UTF-8");
$secret= "6LfUkk4UAAAAAJ_4GZySCCary60Wx6N5ehZdv1Ok";
$sprawdz=file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
$odp=json_decode($sprawdz);

if(empty($name)||empty($address)||empty($telephon)||empty($email)||empty($message)||($odp->success==false))
{	
	//||($odp->succes==false)
	//empty($name)
	$_SESSION['blad']='<div style="color:red; margin: 20px 0 20px;">Uzupełnij wszystkie wymagane pola pola!</div>';


	$_SESSION['fr_name']=$name ;
	$_SESSION['fr_address']=$address ;
	$_SESSION['fr_PC_name']=$PC_name ;
	$_SESSION['fr_telephon']=$telephon ;
	$_SESSION['fr_email']=$email ;
	$_SESSION['fr_message']=$message ;
	unset($_POST['test']);

	
	header("Location: formularz.php");
	exit();
}
else{
echo "dupasssss";


$adres='biuro@czestnet.pl';
$tytul=$name;
$wiadomosc="<br/><strong>Od:</strong>".$name."<br/> <b>Adres email: </b>".$email."<br/><b>Naswa komputer: </b>".$PC_name."<br/><b>Adres: </b>".$address."<br/><br/><b> Wiadomość:</b><br/>".$message;
echo $wiadomosc."<br/>";
$from=$email;
/*
echo $name."<br/>";
echo $address."<br/>";
echo $PC_name."<br/>";
echo $telephon."<br/>";
echo $email."<br/>";
echo $message."<br/>";
*/
$headers = "" .
               "Reply-To:" . $from . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8\nContent-Transfer-Encoding: 8bit' . "\r\n";
$headers .= 'From: ' . $email . "\r\n";
mail($adres, $tytul, $wiadomosc,$headers);

if(isset($_SESSION['blad']))unset($_SESSION['blad']);
if(isset($_SESSION['fr_name']))unset($_SESSION['fr_name']);
if(isset($_SESSION['fr_address']))unset($_SESSION['fr_address']);
if(isset($_SESSION['fr_PC_name']))unset($_SESSION['fr_PC_name']);
if(isset($_SESSION['fr_telephon']))unset($_SESSION['fr_telephon']);
if(isset($_SESSION['fr_email']))unset($_SESSION['fr_email']);
if(isset($_SESSION['fr_message']))unset($_SESSION['fr_message']);
unset($_POST['test']);


}

?>