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
						<a href="pakiety-24.php">Oferta na 24 miesiące</a>
						&nbsp;&nbsp;
						<span style="color: gray;">|</span>
						&nbsp;&nbsp;&nbsp;
						<a href="pakiety-12.php">Oferta na 12 miesięcy</a>
						
						&nbsp;&nbsp;
						<span style="color: gray;">|</span>
						&nbsp;&nbsp;&nbsp;
					
						
						<span style="color: green; text-decoration: underline;">Oferta bez zobowiązań</span>
						
						
						
						</p>

					</div>
				
					
					
					
				<?php 			
				try {
					@require_once "pakiety.php";
				} catch (ErrorException $ex) 
				{
					echo "Unable to load configuration file.";
				}
				oferta(0,0); 
				oferta(1,0); 
				oferta(2,0); 
				oferta(3,0); 			

				?>
					
						
					
					
				
					
					
					
			
					<div style="clear: both;"></div>
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
