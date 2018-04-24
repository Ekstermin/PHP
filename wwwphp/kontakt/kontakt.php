<?php session_start(); 
$Oddzial="Oddział Wrocław";
$biuro="Biuro Obsługi Klienta";
$ulica="Nabycińska";
$kod="53-677";
$numer="19";
$miejscowosc="Wrocław";
$godziny="Pn. – Pt.: 08:00 – 18:00";
$telefon="Tel. 71 712 77 77";

$Oddzial2="Sms alarmowy";
$telefon2="Tel. +48 605 997 277";
$notka="UWAGA! Nie rejestrujemy adresów MAC, korzystając z tego numeru.";
$godz="Pn. – Pt.: 18:00 – 20:00";
$godz2="So. – Niedz.: 10:00 – 20:00";
$notka2="W treści wiadomości prosimy wpisać: Imię, adres zamieszkania, rodzaj problemu. Po analizie oddzwonimy do Państwa.";




?>
<!DOCTYPE HTML>  <!--NAJNOWSZY MODEL  -->
	
<html lang="pl" >

	<head>

	<!-- Głowa  -->
	
		<!-- dane na temat strony  -->

			<?php 			
			try {
				@require_once "../szablon/head.php";
			} catch (ErrorException $ex) 
			{
				echo "Unable to load configuration file.";
			}
			?>
			<script src='https://www.google.com/recaptcha/api.js'></script>
			
			<style>

}
</style>
	</head>


	<body id="body">

	<!-- Ciało  -->
		<div id="container">
			<?php 			
			try {
				@require_once "../szablon/navi_top.php";
			} catch (ErrorException $ex) 
			{
				echo "Unable to load configuration file.";
			}
			?>
			<?php 			
			try {
				@require_once "../szablon/navi_top2.php";
			} catch (ErrorException $ex) 
			{
				echo "Unable to load configuration file.";
			}
			?>
		
			
		</div>	
		<div style="clear: both;">
		</div>

		
			<div id="text" style="margin-top:50px;margin-bottom:50px;">

			
				<div id="kon" >
					<div class="kon" >
						<div class="kon1" style="background: #00800036;"><a >Kontakt</a></span></div>
						<div class="kon1"><a href="../kontakt/sprzedaz.php">Sprzedaż</a></div>
						<div class="kon1"><a href="../kontakt/pomoc_techniczna.php">Pomoc techniczna</a></div>
						<div class="kon1"><a href="../kontakt/platnosci.php">Płatności</a></div>
						<div class="kon1"><a href="../kontakt/pozostale_sprawy.php">Pozostałe sprawy</a></div>
					</div>
				</div>
				<div id="ko">
					
					
					<div class="ko">
						<p><b><?php echo $Oddzial2?></b></p>
						<?php echo $telefon2?><br/><br/>
						
						<?php echo $notka ?><br/><br/>
						
						<?php echo $godz?><br/>
						<?php echo $godz2?><br/><br/>
						<?php echo $notka2?><br/>
						
					</div>
					
					<div class="ko">
						<p><b><?php echo $Oddzial?></b></p>
						<?php echo $biuro?><br/><br/>
						ul.&nbsp;<?php echo $ulica." ".$numer.", <br/>".$kod." ".$miejscowosc ?><br/><br/>
						
						<?php echo $godziny?><br/>
						<?php echo $telefon?>

						
					</div>
					
					<div style="clear: both;"></div>
				</div>
				<div style="clear: both;"></div>
			</div>
			
			
			
			
			<?php 			
			try {
				@require_once "../szablon/media_stopka.php";
			} catch (ErrorException $ex) 
			{
				echo "Unable to load configuration file.";
			}
			?>
			<?php 			
			try {
				@require_once "../szablon/footer.php";
			} catch (ErrorException $ex) 
			{
				echo "Unable to load configuration file.";
			}
			?>

		<script>	
		function isNumberKey(evt){
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
		return true;
		}
		</script>

			<?php 			
			try {
				@require_once "../szablon/skrypt.php";
			} catch (ErrorException $ex) 
			{
				echo "Unable to load configuration file.";
			}
			?>

		
		
	</body>



</html>
