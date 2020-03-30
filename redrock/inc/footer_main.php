		<footer style="z-index: 10">
			<div class="m_link">
				<div class="instagram">
					<a href="https://www.instagram.com/redrock_beerhouse/"></a>
				</div>
				<div class="facebook">
					<a href="https://www.facebook.com/obredrock.co.kr"></a>
				</div>
			</div>
			<p>
				<span>주소 : 서울 서초구 남부순환로 2561 (서초동 1365-22) 원효빌딩 205-206호</span> 사업자등록번호 : 588-86-00066 TEL : 1899-6865 FAX : 02-3472-0014 대표이사 : 조허정
			</p>
			<p>COPYRIGHT © 2018 OB RED ROCK. ALL RIGHT RESERVED.</p>
		</footer>
		<style type="text/css">
 			#pop {display: none; position: absolute; top: 100px; left: 300px; padding: 10px; width: 260px; z-index: 10; color:#fff;}
			#pop .thumb {margin-bottom: 10px;}
			#pop .thumb img{display: block; width: 100%; height: 100%;}
			.owl-dots button{margin: 0 8px; width: 50px; height: 6px; background-color: #fff; border-radius: 4px;}
			.owl-dots button.active {background-color: #94162c;}
		</style>
		<div id="pop">
			<div class="thumb">
				<img src="http://olloyy.dothome.co.kr/portfolio/redrock/img/popup.png" alt="popup">
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
			<img src="../img/icon/arrow_top.png" alt='arrow_top'>
			<span>TOP</span>
		</div>
	</div>
	<script type="text/javascript">
		$('.bx').click(function() {
			$('html, body').animate({scrollTop : '0'},500);
		});

		(function(){
			// 전체 화면 채우도록 jq 작업처리
			$(window).resize(function(){
				var H = $(window).height();
				$('#wrap').height(H);
			}).resize()
		})();
	</script>
</body>
</html>