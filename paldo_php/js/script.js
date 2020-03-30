(function(){ // 쿠키 생성&삭제
	cookie = { // 쿠키변환에 필요한 함수를 모아놓은 객체
		set:function(name, value, expire){ // applicaton 안에 있는 실제 쿠키를 생성하는데 필요한 함수 // 함수안에 매개변수 3개 생성
			var D=new Date();
			D.setTime(D.getTime()+(24*60*60*1000*expire)); // Cookie가 소멸할 시간을 설정 // 현재시간 이후 시점으로 D라는 변수를 셋팅한다
			// document.cookie="A=2; expires="+D.toUTCString(); // Cookie를 생성 // A가 2라는 쿠키를 expires="+D.toUTCString()의 시간으로 생성을 한다는 의미 / name 대신에 2, value 대신에 2 들어감
			document.cookie=name+'='+value+'; expires='+D.toUTCString();
			// updateCookie(name, value); // 생성한 쿠키를 객체로 바꾸기위해 updateCookie함수 실행
			cookie.update();
		},
		update:function(){ // 쿠키를 변환하는 함수
			var C=document.cookie;// 일단 쿠키값 받아오기 // C='X=1; test=1; green=강남'
			C=C.split('; '); // '; '를 기준으로 잘라서 배열로 생성
			C.forEach(function(v,i,o){ // 배열의 개수만큼 loop시켜서 /* 1 */ 처럼 만들기
				// v='X=1';
				v=v.split('='); // 문자열을 =기준으로 잘라서 배열로 전환, v=['X','1']
				// console.log(v); // ["test", "1"]
				cookie[v[0]]=v[1]; // cookie라는 객체에 0번째 배열에 1번째 배열을 넣어주겠다.
			})
		},
		delete:function(name){ // 쿠키값 제거 // name 써주는 이유 -> 여러 Cookie 중에서 원하는 것만 지워주기 위해서 써준것
			var D=new Date(); // 현재 시간을 변수에 저장
			D.setTime(D.getTime()-10000); // Cookie가 소멸할 시간을 현재시간 이전으로 설정
			document.cookie=name+'= null; expires='+D.toUTCString(); // 유효기간이 지난 쿠키는 자동으로 지워짐. 즉, 유효기간을 이전으로 설정해주면 바로 지워짐
			cookie[name]=null; // 어짜치 지워질 건데 null으로 만들어준 이유 : null으로 아예 지워주고 난다음에 cookie자체를 지워주는 게 낫다.
			delete cookie[name]; // test라는 속성 자체가 없어짐
		}
	}
	cookie.update();
})();

$(function(){	

	(function(){
		if(!cookie.pop){ // pop cookie가 없다면
			$('#pop').show(); // pop-up을 보여줘라
		}
		$('.btn_close').on('click', function(){ // 일주일간 보지않기를 체크했으면
			if($('.chk_bx').is(':checked')){
				cookie.set('pop', 'off', 1); // 7일 동안 'pop'='off' 쿠키를 생성
			}
			$('#pop').hide(); // 팝업 닫기
		});
	})();
})