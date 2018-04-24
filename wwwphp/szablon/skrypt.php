		<script>

		$(document).ready(function() {
		<!--var NavY = $('#nav2').offset().top;-->
		var NavY = $('.nav').offset().top;
		 
		var stickyNav = function(){
		var ScrollY = $(window).scrollTop();
			  
		if (ScrollY > NavY) { 
		<!--	$('#nav2').addClass('sticky2');-->
			$('.nav').addClass('sticky2');
		} else {
		<!--	$('#nav2').removeClass('sticky2'); -->
			$('.nav').removeClass('sticky2'); 
		}
		};
		 
		stickyNav();
		 
		$(window).scroll(function() {
			stickyNav();
		});
		});
		
		</script>