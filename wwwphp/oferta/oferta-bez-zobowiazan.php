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
			
			
			<div id="text">
				<div id="podmenu"> 
					<p>
						<a href="oferta-na-24-miesiace.php">Oferta na 24 miesiące</a>
						&nbsp;&nbsp;
						<span style="color: gray;">|</span>
						&nbsp;&nbsp;&nbsp;					
						
						<a href="oferta-na-12-miesiecy.php">Oferta na 12 miesięcy</a>
												
						&nbsp;&nbsp;
						<span style="color: gray;">|</span>
						&nbsp;&nbsp;&nbsp;
						<span style="color: green; text-decoration: underline;">Oferta bez zobowiązań</span>
					</p>

				</div>
				<?php 			
			try {
				@require_once "ob1.php";
			} catch (ErrorException $ex) 
			{
				echo "Unable to load configuration file.";
			}
			?>
				
				
				
				
				<?php
				oferta(0,0); 
				oferta(1,0); 
				oferta(2,0); 
				oferta(3,0); 

				?>
				
				
				
			


				
				
				
				
				
				
			
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
