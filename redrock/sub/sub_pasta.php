<?php include '../inc/header.php'; ?>
<div id="container" data-index="5">
	<div class="banner">
		<div class="content">
			<div class="inner">
				<div class="product_wrap">
					<div class="pasta product">
						<div class="tit">
							<span class="big">Pasta / Side <em>favorite dishes</em></span>
						</div>
						<div class="img_wrap">
							<div class="img">
								<img src="../img/pasta_tomato.png" alt="pasta_tomato">
								<p>다양한 해산물과 토마토의 환상적인 케미로<br>어우러진 매콤하고 감칠맛나는 퓨전 스타일의 스튜</p>
							</div>
							<div class="img">
								<img src="../img/pasta_cream.png" alt="pasta_cream">
								<p>표고버섯의 향긋한 풍미와 통베이컨의 식감의<br>조화가 부드러운 크림소스와 잘어울리는 파스타</p>
							</div>
							<div class="img">
								<img src="../img/pasta_bokki.png" alt="pasta_bokki">
								<p>까사레치아면을 사용한 국민 간식 떡볶이의 새로운변신,<br>입안 가득 느껴지는 풍부한 맛의 파스타</p>
							</div>
							<div class="img">
								<img src="../img/side_chicken.png" alt="side_chicken">
								<p>두가지 맛의 순살치킨과 스모크향이 어우려저<br>맥주에 잘 어울리는 최고의 안주</p>
							</div>
							<div class="img">
								<img src="../img/side_fries.png" alt="side_fries">
								<p>고소한 감자에 짭쪼름한 미트소스와<br>부드러운 치즈가 어우러져 시원한맥주와 찰떡궁합</p>
							</div>
							<div class="img">
								<img src="../img/side_gambas.png" alt="side_gambas">
								<p>마늘오일과 허브에 맛있게 조린 토마토와 새우를<br>치아바타와 함께 곁들여먹는 정통 스페인 요리</p>
							</div>
							<div class="img">
								<img src="../img/side_potato.png" alt="side_potato">
								<p>먹음직스런게 쌓여있는 감자칩의 매콤하면서도<br>담백함의 끝을 보여주는 남녀노소 인기메뉴</p>
							</div>
							<div class="img">
								<img src="../img/side_bulgogi.png" alt="side_bulgogi">
								<p>노릇노릇 구워진 또띠아에 치즈, 고기,<br>신선한 재료로 속을 채운 멕시칸 요리</p>
							</div>
						</div> <!-- /.img_wrap -->
					</div> <!-- /.pasta -->
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