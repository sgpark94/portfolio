<?php include '../inc/header.php'; ?>
<div id="container" data-index="3">
	<div class="banner">
		<div class="content">
			<div class="inner">
				<div class="product_wrap">
					<div class="salads product">
						<div class="tit">
							<span class="big">Salads <em>make only fresh vegetables</em></span>
						</div>
						<div class="img_wrap">
							<div class="img">
								<img src="../img/salad_fruit.png" alt="salad_fruit">
								<p>제철과일의 후레시함과 과일치즈<br>파인요거트 드레싱의 상큼한 샐러드</p>
							</div>
							<div class="img">
								<img src="../img/salad_cobb.png" alt="salad_cobb">
								<p>미국의 콥셰프 이름에서 따온 요리<br>입안가득 신선함 가득 샐러드</p>
							</div>
							<div class="img">
								<img src="../img/salad_shrimp.png" alt="salad_shrimp">
								<p>살이 통통 오른 새우+아보카도+시트론드레싱<br>새콤달콤 맛의 건강 샐러드</p>
							</div>
							<div class="img">
								<img src="../img/salad_cheese.png" alt="salad_cheese">
								<p>담백한 치즈떡갈비+신선한 구운 야채<br>촉촉하고 상큼한 맛을 볼 수 있는 샐러드</p>
							</div>
							<div class="img">
								<img src="../img/salad_sausage.png" alt="salad_sausage">
								<p>아삭한 야채+통통한 육즙의 소시지<br>쫄깃한 식감이 매력적인 샐러드</p>
							</div>
							<div class="img">
								<img src="../img/salad_waffle.png" alt="salad_waffle">
								<p>미니와플+부드러운 리코타 치즈의 조화</p>
							</div>
							<div class="img">
								<img src="../img/salad_chicken.png" alt="salad_chicken">
								<p>훈연향이 베어있는 부드러운 닭가슴살<br>+상큼한 드레싱의 건강한 요리</p>
							</div>
						</div> <!-- /.img_wrap -->
					</div> <!-- /.salads -->
				</div> <!-- /.product_wrap -->
			</div> <!-- /.inner -->
		</div> <!-- /.content -->
	</div> <!-- /.banner -->
</div> <!-- /#container -->
<script type="text/javascript">		
	$(document).scroll(function(){

		if($(this).scrollTop()<$(window).height()-600){

			$('.bx').removeClass('active');
		} else {

			$('.bx').addClass('active');
		}
	}).scroll();

	$('.bx').click(function() {
		$('html, body').stop().animate({scrollTop : '0'},500);
	});
</script>
<?php include '../inc/footer_sub.php'; ?>