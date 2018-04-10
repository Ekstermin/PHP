
<!DOCTYPE HTML>  <!--NAJNOWSZY MODEL  -->
	
<html lang="pl" >

	<head>

	<!-- Głowa  -->
	
		<!-- dane na temat strony  -->
	

		<?php 			
			try {
				@require_once "szablon/head.php";
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
				@require_once "szablon/navi_top.php";
			} catch (ErrorException $ex) 
			{
				echo "Unable to load configuration file.";
			}
			?>
			<?php 			
			try {
				@require_once "szablon/navi_top2.php";
			} catch (ErrorException $ex) 
			{
				echo "Unable to load configuration file.";
			}
			?>
		
			
		</div>	
		<div style="clear: both;"></div>
			
			
			
			
			
			<div id="text">
				
				
		
				
				
				
				
				
				
				
				
			</div>	
			
			
			<?php 			
			try {
				@require_once "szablon/media_stopka.php";
			} catch (ErrorException $ex) 
			{
				echo "Unable to load configuration file.";
			}
			?>
			<?php 			
			try {
				@require_once "szablon/footer.php";
			} catch (ErrorException $ex) 
			{
				echo "Unable to load configuration file.";
			}
			?>
		

	
<script>

	$(document).ready(function() {
	<!--var NavY = $('#nav2').offset().top;-->
	var NavY = $('#navi').offset().top;
	 
	var stickyNav = function(){
	var ScrollY = $(window).scrollTop();
		  
	if (ScrollY > NavY) { 
	<!--	$('#nav2').addClass('sticky2');-->
		$('#navi').addClass('sticky2');
	} else {
	<!--	$('#nav2').removeClass('sticky2'); -->
		$('#navi').removeClass('sticky2'); 
	}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
		stickyNav();
	});
	});
		
		</script>
		
		

		
		
	</body>



</html>
