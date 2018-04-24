<!DOCTYPE HTML>  <!--NAJNOWSZY MODEL  -->
	
<html lang="pl" >

	<head>

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
			
			<div style="clear: both;"></div>
			<div id="text">
				
				
				<div id="box" >
				
				<div id="podmenu"> 
					<p>
						<a href="internet-24.php">Oferta na 24 miesiące</a>
							&nbsp;&nbsp;
						
						<span style="color: gray;">|</span>
						
							&nbsp;&nbsp;&nbsp;
						<span style="color: green; text-decoration: underline;">Oferta na 12 miesięcy</span>
							&nbsp;&nbsp;
						
						<span style="color: gray;">|</span>					
							&nbsp;&nbsp;&nbsp;
						
						<a href="internet-bez.php">Oferta bez zobowiązań</a>
					</p>
				</div>
				
				
			<?php 	
						
						try {
							require_once "internet.php";
						} catch (ErrorException $ex) 
						{
							echo "Unable to load configuration file.";
						}
				
						internet(1); 
						 

						?>
						
						
				<div style="clear: both;"></div>
				</div>
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
			
		</div>
		
		

	
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
