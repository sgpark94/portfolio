<?php include '../inc/header.php'; ?>
<div id="container" data-index="2">
	<div class="banner">
		<div class="content">
			<div class="inner">
				<div class="product_wrap beers">
					<div class="redrock product">
						<div class="tit">
							<span class="big">Special Red-Rock Beers <em>low-cost and satisfaction of the five senses</em></span>
						</div>
						<div class="img_wrap">
							<div class="img_01 img">
								<img src="../img/original.png" alt="redrock_original">
								<p>부드러운 카라멜 몰트 아로마의 섬세한 홉향을<br>느낄 수 있는 밸런스 좋은 레더 라거 / ALC 5.0%</p>
							</div>
							<div class="img_03 img">
								<img src="../img/ipa.png" alt="redrock_stout">
								<p>4가지의 다른 몰트를 다크로스팅하여 진한<br>초콜릿과 커피향의 꽉찬 바디감이 좋은 맥주 / ALC 5.2%</p>
							</div>
							<div class="img_02 img">
								<img src="../img/stout.png" alt="redrock_ipa">
								<p>홉 향이 가득한 과일의 풍미와 기분좋은 쌉쌉함에서<br>나오는 단맛과의 조화가 좋은 맥주 / ALC 5.0%</p>
							</div>
						</div> <!-- /.img_wrap -->
					</div> <!-- /.redrock -->
					<div class="goose product">
						<div class="tit">
							<span class="big">Goose Island <em>rich softness and taste of women</em></span>
						</div>
						<div class="img_wrap">
							<div class="img_01 img">
								<img src="../img/goose_urban.png" alt="goose_urban">
								<p>레몬과 오렌지향을 베이스로 상큼하고<br>가볍게 즐기실 수 있는 바이젠 맥주 / ALC 4.3%</p>
							</div>
							<div class="img_02 img">
								<img src="../img/goose_ipa.png" alt="goose_ipa">
								<p>구스아일랜드 대표맥주, 화사한 오렌지향과<br>드라이한 몰트 바디에 밸런스가 좋은 맥주 / ALC 5.9%</p>
							</div>
							<div class="img_03 img">
								<img src="../img/goose_honkers.png" alt="goose_honkers">
								<p>캐러맬, 토피 등 잘 볶은 맥아향의 달콤 고소한<br>맛과 오렌지, 레몬의 풍미가 좋은 맥주 / ALC 4.3%</p>
							</div>
						</div>
					</div> <!-- /.goose -->
					<div class="ob product">
						<div class="tit">
							<span class="big">OB Beers <em>brand beer captivated the taste of people all over the world</em></span>
						</div>
						<div class="img_wrap">
							<div class="img_01 img">
								<img src="../img/ob_stella.png" alt="ob_stella">
								<p>은은하게 느껴지는 홉향과 깔끔한 목 넘김과<br>청량감이 좋은 체코 필스너 대표맥주 / ALC 5.0%</p>
							</div>
							<div class="img_02 img">
								<img src="../img/ob_budweiser.png" alt="ob_budweiser">
								<p>전 세계 시장 점유율 1위, 쌀을 첨가해 부드러운<br>맛과 향의 좋은 라이트 바디 맥주 / ALC 5.0%</p>
							</div>
							<div class="img_03 img">
								<img src="../img/ob_hoegaarden.png" alt="ob_hoegaarden">
								<p>오렌지 껍질이 첨가되어 달콤하고 산뜻한<br>과일향이 좋은 벨기에식 정통 밀맥주 / ALC 4.9%</p>
							</div>
							<div class="img_04 img">
								<img src="../img/ob_pilsner.png" alt="ob_pilsner">
								<p>맥즙농도가 높아 깊고 진한맛이 좋으며<br>끝맛은 투명하고 깔끔한 맥주 / ALC 5.2%</p>
							</div>
							<div class="img_04 img">
								<img src="../img/ob_weizen.png" alt="ob_weizen">
								<p>입안가득 퍼지는 부드러운 향과 반투명한<br>뽀안 빛깔이 매력적인 맥주 / ALC 5.0%</p>
							</div>
						</div> <!-- /.img_wrap -->
					</div> <!-- /.ob -->
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