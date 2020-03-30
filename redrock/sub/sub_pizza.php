<?php include '../inc/header.php'; ?>
<div id="container" data-index="4">
	<div class="banner">
		<div class="content">
			<div class="inner">
				<div class="product_wrap">
					<div class="pizza product">
						<div class="tit">
							<span class="big">Pizza <em>delicious pizza with health in mind</em></span>
						</div>
						<div class="img_wrap">
							<div class="img">
								<img src="../img/pizza_bulgogi.png" alt="pizza_bulgogi">
								<p>불고기와 샐러드가 어우러져 담백함과<br>건강함을 한번에 느낄 수 있는 피자</p>
							</div>
							<div class="img">
								<img src="../img/pizza_bbq.png" alt="pizza_bbq">
								<p>100% 자연산 모짜렐라에 식감을 자극하는 바삭한<br>도우에 진한 소스 향이 가득한 정통 BBQ피자</p>
							</div>
							<div class="img">
								<img src="../img/pizza_pepperoni.png" alt="pizza_pepperoni">
								<p>옐로우 페퍼로니의 매콤한 맛에 고소한 모짜렐라<br>치즈를 듬뿍 얹어 구워낸 아메리칸 스타일 피자</p>
							</div>
							<div class="img">
								<img src="../img/pizza_potato.png" alt="pizza_potato">
								<p>고구마무스를 이용한 달콤하면서도<br>담백한 맛을 동시에 즐길 수 있는 피자</p>
							</div>
							<div class="img">
								<img src="../img/pizza_gorgonzola.png" alt="pizza_gorgonzola">
								<p>고르곤졸라의 풍미와 갈릭향의<br>조화가 잘 어우러진 피자</p>
							</div>
							<div class="img">
								<img src="../img/pizza_shrimp.png" alt="pizza_shrimp">
								<p>바삭한 도우에 통살 쉬림프 볼로 토핑하여<br>향긋한 새우 풍미가 씹을 때 마다<br>입안 가득 느껴지는 피자</p>
							</div>
						</div> <!-- /.img_wrap -->
					</div> <!-- /.pizza -->
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