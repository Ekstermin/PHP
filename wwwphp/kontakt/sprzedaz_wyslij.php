<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
session_start();
$test = $_POST['test'];
echo $test."<br/><br/><br/>";
switch($test)
	{
		case 'płatności':
		{
			$_SESSION['location']="Location: platnosci.php";	
			
			break;
		}
		case 'pozostałe sprawy':
		{
			$_SESSION['location']="Location: pozostale_sprawy.php";	
			
			break;
		}
		case 'pomoc techniczna':
		{
			$_SESSION['location']="Location: pomoc_techniczna.php";	
			
			break;
		}
		case 'sprzedaż':
		{
			$_SESSION['location']="Location: sprzedaz.php";	
			
			break;
		}
		default:
		{
			$_SESSION['location']="dupa";	
			
			break;
		}
	}
function sendemail($name,$email,$wiadomosc,$attachment,$attachment2,$typ)
{


	//Load Composer's autoloader
	require 'vendor/autoload.php';

	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	try {
		
	   $mail->CharSet = 'UTF-8';
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.wp.pl';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'czestnet@wp.pl';                 // SMTP username
		$mail->Password = 'zxcASDqwe';                           // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to

		//Recipients
		$mail->setFrom('czestnet@wp.pl', 'czestnet');
		
		$mail->addAddress('czestnet@wp.pl', 'czestnet@wp.pl');     // Add a recipient
		
		$mail->addReplyTo($email, $name);


		//Attachments
		if($attachment!='')
		{
	    $mail->addAttachment($attachment);         // Add attachments
		}
		if($attachment2!='')
		{
	    $mail->addAttachment($attachment2);         // Add attachments
		}
	   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments


		//Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = $typ;
		$mail->Body    = $wiadomosc;
		$html = new \Html2Text\Html2Text($mail->Body);


		$mail->AltBody = $html->getText();

		$mail->send();
		$_SESSION['info']='<div style="color:red; margin: 20px 0 20px;">Wiadomość wysłana.</div>';
		echo "wysłane";
		header($_SESSION['location']);	
		echo "aaaaaa     ".$_SESSION['location'];
		exit();
	} catch (Exception $e) {
		$_SESSION['info']='<div style="color:red; margin: 20px 0 20px;">Wiadomość nie wysłana.</div>';
		echo "nie wysłane";
		header($_SESSION['location']);	
		exit();
	}
}



if(!isset($_POST['submit']))
{
	switch($test)
	{
		case 'płatności':
		{
			header("Location: platnosci.php");	
			exit();
			break;
		}
		case 'pozostałe sprawy':
		{
			header("Location: pozostale_sprawy.php");	
			exit();
			break;
		}
		case 'pomoc techniczna':
		{
			header("Location: pomoc_techniczna.php");	
			exit();
			break;
		}
		case 'sprzedaż':
		{
			header("Location: sprzedaz.php");	
			exit();
			break;
		}
		
	}
	
}

  




$name =$_POST['name'];
$address =$_POST['adres'];
$telephon =$_POST['telephon'];
$email =$_POST['email'];
$message =$_POST['message'];
$secret= "6LfUkk4UAAAAAJ_4GZySCCary60Wx6N5ehZdv1Ok";
$sprawdz=file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
$odp=json_decode($sprawdz);

$name= htmlentities($name, ENT_QUOTES, "UTF-8");
$address= htmlentities($address, ENT_QUOTES, "UTF-8");
$telephon= htmlentities($telephon, ENT_QUOTES, "UTF-8");
$email= htmlentities($email, ENT_QUOTES, "UTF-8");
$message= htmlentities($message, ENT_QUOTES, "UTF-8");

$wiadomosc= "<br/><strong>Od:</strong> ". $name ."<br/><strong>Adres: </strong>".$address."<br/><strong>Telefon: </strong>".$telephon."<br/><strong>Email: </strong>".$email."<br/><strong>Wiadomość: </strong>".$message."<br/><br/><br/><strong>Załącznik o nzawie: </strong><br/>".$_FILES['attachment']['name']."<br/>".$_FILES['attachment2']['name'];

echo $wiadomosc ;
//||($odp->success==false)
if(empty($name)||empty($address)||empty($telephon)||empty($email)||empty($message)||($odp->success==false))
{	
	//||($odp->succes==false)
	//empty($name)
	$_SESSION['blad']='<div style="color:red; margin: 20px 0 20px;">Uzupełnij wszystkie wymagane pola pola!</div>';


	$_SESSION['fr_name']=$name ;
	$_SESSION['fr_address']=$address ;

	$_SESSION['fr_telephon']=$telephon ;
	$_SESSION['fr_email']=$email ;
	$_SESSION['fr_message']=$message ;
	unset($_POST['test']);
	echo $_SESSION['location'];
	
	header($_SESSION['location']);
	exit();
}
else
{

	$plik= "attachment/" . basename($_FILES['attachment']['name']);
	if(isset($_FILES['attachment'])) {
		
		$errors     = array();
		$maxsize    = 3100152;
		$acceptable = array(
			'application/pdf',
			'image/jpeg',
			'image/jpg',
			'image/gif',
			'image/png'
		);
		//|| ($_FILES["attachment"]["size"] == 0)
		if(($_FILES['attachment']['size'] >= $maxsize) ) 
			{
			$_SESSION['blad'] = '<div style="color:red; margin: 20px 0 20px;">Zbyt duży plik, maksymalny rozmiar to 3 megabity.</div>';
			}

		if(!in_array($_FILES['attachment']['type'], $acceptable) && (!empty($_FILES["attachment"]["type"]))) 
			{
			$_SESSION['blad'] = '<div style="color:red; margin: 20px 0 20px;">Zły rodzaj pliku. Jedynie PDF, JPG, GIF and PNG pliki są akceptowane.</div>';
			
			}
		if(isset($_SESSION['blad']))
			{
			
			header( $_SESSION['location']);
			exit();
			}
	}
	if($bl=move_uploaded_file($_FILES['attachment']['tmp_name'],dirname(__FILE__)."/". $plik))
		{
			
		}
	else
		{
			$plik='';	
		}		
	$plik2= "attachment/" . basename($_FILES['attachment2']['name']);
	if(isset($_FILES['attachment2'])) {
		
		$errors     = array();
		$maxsize    = 3100152;
		$acceptable = array(
			'application/pdf',
			'image/jpeg',
			'image/jpg',
			'image/gif',
			'image/png'
		);
		//|| ($_FILES["attachment"]["size"] == 0)
		if(($_FILES['attachment2']['size'] >= $maxsize) ) 
			{
			$_SESSION['blad'] = '<div style="color:red; margin: 20px 0 20px;">Zbyt duży plik, maksymalny rozmiar to 3 megabity.</div>';
			}

		if(!in_array($_FILES['attachment2']['type'], $acceptable) && (!empty($_FILES["attachment2"]["type"]))) 
			{
			$_SESSION['blad'] = '<div style="color:red; margin: 20px 0 20px;">Zły rodzaj pliku. Jedynie PDF, JPG, GIF and PNG pliki są akceptowane.</div>';
			
			}
		if(isset($_SESSION['blad']))
			{
			
			header($_SESSION['location']);
			exit();
			}
	}
	if($bl=move_uploaded_file($_FILES['attachment2']['tmp_name'],dirname(__FILE__)."/". $plik2))
		{
			
		}
	else
		{
			$plik2='';	
		}
	
	if(isset($_SESSION['blad']))unset($_SESSION['blad']);
	if(isset($_SESSION['fr_name']))unset($_SESSION['fr_name']);
	if(isset($_SESSION['fr_address']))unset($_SESSION['fr_address']);
	if(isset($_SESSION['fr_telephon']))unset($_SESSION['fr_telephon']);
	if(isset($_SESSION['fr_email']))unset($_SESSION['fr_email']);
	if(isset($_SESSION['fr_message']))unset($_SESSION['fr_message']);
	unset($_POST['test']);
	sendemail($name,$email,$wiadomosc,$plik,$plik2,$test);
}





