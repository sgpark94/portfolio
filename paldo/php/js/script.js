(function(){
	cookie = {
		set:function(name, value, expire){
			var D=new Date();
			D.setTime(D.getTime()+(24*60*60*1000*expire));
			document.cookie=name+'='+value+'; expires='+D.toUTCString();
			cookie.update();
		},
		update:function(){
			var C=document.cookie;
			C=C.split('; ');
			C.forEach(function(v,i,o){
				v=v.split('=');
				cookie[v[0]]=v[1];
			})
		},
		delete:function(name){
			var D=new Date();
			D.setTime(D.getTime()-10000);
			document.cookie=name+'= null; expires='+D.toUTCString();
			cookie[name]=null;
			delete cookie[name];
		}
	}
	cookie.update();
})();

$(function(){	

	(function(){
		if(!cookie.pop){
			$('#pop').show();
		}
		$('.btn_close').on('click', function(){
			if($('.chk_bx').is(':checked')){
				cookie.set('pop', 'off', 1);
			}
			$('#pop').hide();
		});
	})();
})