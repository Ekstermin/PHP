<?php session_start(); ?>
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
		<div style="clear: both;"></div>
			
			<?php 
			/*
			
			
			
					
						
						
						
						
			*/
			?>
			
			
			
			<div id="text">
				<div id="formularz">
					
					<form action="formularz_wyslij.php" method="post">
						<input type="hidden" name="test" value="1" />
						Imie i Nazwisko: <input type="text" name="name"
						value="<?php 
						if(isset($_SESSION['fr_name']))
						{
							echo $_SESSION['fr_name'];
							unset($_SESSION['fr_name']);							
						}
						?>"
						placeholder="Np. Jan Kowalski"/><br/>
						Adres zamieszkania: <input type="text" name="adres" 
						value="<?php 
						if(isset($_SESSION['fr_address']))
						{
							echo $_SESSION['fr_address'];
							unset($_SESSION['fr_address']);							
						}
						?>"
						placeholder="Proszę podać adrez zamieszkania."/><br/>
						Nazwa komputera w sieci(tylko klient): <input type="text" 
						value="<?php 
						if(isset($_SESSION['fr_PC_name']))
						{
							echo $_SESSION['fr_PC_name'];
							unset($_SESSION['fr_PC_name']);							
						}
						?>"
						name="PC_name" placeholder="Nazwa komputera (pole nie obowiązkowe)"/><br/>

						Numer telefonu komórkowy: <input type="text" 
						value="<?php 
						if(isset($_SESSION['fr_telephon']))
						{
							echo $_SESSION['fr_telephon'];
							unset($_SESSION['fr_telephon']);							
						}
						?>"	
						name="telephon" onkeypress="return isNumberKey(event)" maxlength="9" pattern="[0-9]{9}" placeholder="Proszę wprowadzić 9 cyfrowy numer telefonu np. 111222333 lub 998887766"/><br/>
						
						E-mail: <input type="email" 
						value="<?php 
						if(isset($_SESSION['fr_email']))
						{
							echo $_SESSION['fr_email'];
							unset($_SESSION['fr_email']);							
						}
						?>"	
						name="email" placeholder="Np. mail@wp.pl" /><br/>
						Wiadomość:<br/><textarea style="resize:none" 
							name="message" rows="10" cols="40" placeholder="Proszę wprowadzić wiadomość."><?php 	if(isset($_SESSION['fr_message']))
						{
							echo $_SESSION['fr_message'];
							unset($_SESSION['fr_message']);							
						}
						?></textarea><br/>
						
						<div class="g-recaptcha" data-sitekey="6LfUkk4UAAAAAK6lDcxxAyZtoW7cl_9eCRVniSOV"></div>
						
					<input type="submit">
			
					
					</form>
					
					<?php 		
					if(isset($_SESSION['blad']))
					{
					echo $_SESSION['blad'];
					unset($_SESSION['blad']);
					}
					?>
					
					
				
				</form>
					
				</div>
				
				
				
				
				
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
				@require_once "szablon/skrypt.php";
			} catch (ErrorException $ex) 
			{
				echo "Unable to load configuration file.";
			}
			?>
		
		

		
		
	</body>



</html>
