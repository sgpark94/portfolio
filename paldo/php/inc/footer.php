		<footer>
			<div class=inner>
				<div class="ft_l">
					<h1>paldo_logo</h1>
				</div>
				<div class="ft_r">
					<ul class="ft_nav clearfix">
						<li><a href="#">이용약관</a></li>
						<li><span></span></li>
						<li><a href="#">개인정보 취급방침</a></li>
						<li><span></span></li>
						<li><a href="#">이메일 무단수집거부</a></li>
						<li><span></span></li>
						<li><a href="#">고객의 소리</a></li>
					</ul>
					<div class="ft_txt">
						<span>사업자등록번호 : 308-81-03161</span>
						<span>대표이사 : 고정완</span><br>
					</div>
					<div class="ft_txt">
						<span>서울특별시 서초구 강남대로 577</span>
						<span>전화 : 1577-8593</span>
						<span>팩스 : 02-3449-6657</span>
					</div>
					<p>COPYRIGHT ⓒ 2012 PALDO. ALL RIGHTS RESERVED.</p>
				</div>
			</div> <!-- /.inner -->
		</footer>
		<style type="text/css">
 			#pop {position: absolute; top: 100px; left: 300px; padding: 10px; width: 260px; z-index: 10; color:#fff;}
			#pop .thumb {margin-bottom: 10px;}
			#pop .thumb img{display: block; width: 100%; height: 100%;}
			.owl-dots button{margin: 0 8px; width: 50px; height: 6px; background-color: #fff; border-radius: 4px;}
			.owl-dots button.active {background-color: #94162c;}
		</style>
		<div id="pop">
			<div class="thumb">
				<img src="http://olloyy.dothome.co.kr/portfolio/paldo_php/img/popup.png" alt="popup">
			</div>
			<div class="chk">
				<label>
					<input type="checkbox" class="chk_bx">
					<span>오늘은 이창을 열지 않음</span>
				</label>
				<input type="button" value="[닫기]" class="btn_close">
			</div>
		</div>
	</div> <!-- /#wrap -->
	<div id="top">
		<div class="bx">
			<img src="/portfolio/paldo_php/img/icon/arrow_top.png" alt='arrow_top'>
			<span>TOP</span>
		</div>
	</div>
	<script type="text/javascript">
		$(document).scroll(function(){

			if($(this).scrollTop()<$(window).height()){

				$('.bx').removeClass('active');
			} else {

				$('.bx').addClass('active');
			}
		}).scroll();

		$('.bx').click(function() {
			$('html, body').animate({scrollTop : '0'},500);
		});

		var owl = $('.owl-carousel');
			owl.owlCarousel({
				margin: 10,
				// center: true, // 1번 리스트를 중앙에서 시작
				nav: true, // 컨트롤러
				loop: true,
				responsive: {
				0: {
					items: 1
				}
			}
		});
		$('.nav_small_tit ul').hover(function(){
			var idx=$(this).index();
			$('.main_nav li').eq(idx).addClass('active');

		}, function(){
			$('.main_nav li').removeClass('active');
		});
	</script>
</body>

</html>