<?php include './inc/header.php'; ?>
<div id="main_container">
	<div class="visual">				
		<div class="owl-carousel owl-theme big_banner">
			<div class="banner dark" style="background-image: url(./img/main_banner_2.jpg);"><i></i></div>
			<div class="banner dark" style="background-image: url(./img/main_banner_1.jpg);"><i></i></div>
			<div class="banner dark" style="background-image: url(./img/main_banner_3.jpg);"><i></i></div>
		</div><!-- /.big_banner -->
	</div> <!-- /.visual -->
</div> <!-- /#container -->
<script type="text/javascript">
	
	$('.owl-carousel').owlCarousel({
		transitionStyle : "fade",
        // touchDrag:false,
        // mouseDrag:false,
	    loop:true,
	    margin:0,
	    nav:true,
	    responsive:{
	        0:{
	            items:1
	        }
	    }
	})

</script>
<?php include './inc/footer_main.php'; ?>
		