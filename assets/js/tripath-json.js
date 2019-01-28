function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min + 1) ) + min;
}

var pembaruan = 20000;
function liveShow(){
	var delay = 500;
	var curDelay = 0;
	$('.profil').each(function(){
		var curSet = $(this);
		setTimeout(function(){
			curSet.animateCSS("zoomInDown", {duration: 1000});
		}, curDelay);
		curDelay = curDelay + delay;
	});
  curDelay = curDelay + delay;
	setTimeout(function(){
    $('.total-suara').fadeIn();
		$('.profil-suara').each(function(){
			var width = $(this).find('.progress-bar').attr('aria-valuenow')+'%';
			$(this).find('.progress-bar').attr('style','width:'+width+';');
		});
		setTimeout(function(){
			$('.profil-persen').each(function(){
				$(this).animateCSS("fadeInDown");
			});
		},500);
	}, curDelay);
}
function liveHide(){
	var delay = 500;
	var curDelay = (($('.profil').length + 1) * delay) - 200;
	curDelay = curDelay - delay;
	$('.profil').each(function(){
		var curSet = $(this);
		setTimeout(function(){
			curSet.animateCSS("zoomOutUp",function(){
        curSet.remove();
      });
		}, curDelay);
		curDelay = curDelay - delay;
	});
	$('.total-suara').animateCSS("fadeOutDown",function(){
    $(this).remove();
  });
	//console.log("Hiding live...");
}
function cekPembaruanChart(){
	$.ajaxSetup({ cache: false });
	$('#pembaruan').attr('data-status','');
	var curTgl = $('#pembaruan').attr('data-tgl');
	$.getJSON('../data/hasil.json', function(data) {
		var tgl = data[0]['date'];
		if(tgl == curTgl){
			$('#pembaruan').attr('data-status','1');
			setTimeout(cekPembaruanChart, pembaruan);
		} else {
			if($('.profil').length){
				var curDelay = ($('.profil').length + 1) * 500;
				liveHide();
			} else
				var curDelay = 200;
			setTimeout(liveChart, curDelay);
		}
	}).fail(function(){
		setTimeout(cekPembaruanChart, pembaruan);
		$('#pembaruan').attr('data-status','0');
		liveHide();
	});
}

var appended = false;
function liveChart(){
	var isinya = "";
	$.ajaxSetup({ cache: false });
	$.getJSON('../data/hasil.json', function(data) {
	    var tgl = data[0]['date'];
			var tot_suara = data[0]['total_suara'];
			var tot_pemilih = data[0]['total_pemilih'];
			var kandidat = data[0]['kandidat'];
			var tot_kandidat = data[0]['total_kandidat'];
			var style = ['primary','info','warning','success','danger'];
			for(var init = 1;init <= tot_kandidat;init++){
				var kdt_nama = kandidat['kandidat_'+init]['nama'];
				var kdt_kelas = kandidat['kandidat_'+init]['kelas'];
				var kdt_fbid = kandidat['kandidat_'+init]['fbid'];
				var kdt_suara = kandidat['kandidat_'+init]['suara'];
				var kdt_persen = ((kdt_suara / tot_suara) * 100).toFixed(2);
				var curStyle = style[getRndInteger(1,5)];
        var ignitor = '<div class="profil" data-value="'+kdt_suara+'" id="profil_'+init+'"></div>';
        appended = false;
        if(init == 1){
          $('#kandidat').append(ignitor);
          //console.log("First init...");
          appended = true;
        } else {
          if(appended == false){
            $('.profil').each(function(){
              var cValue = parseInt($(this).attr('data-value'));
              if(kdt_suara >= cValue){
                $(this).before(ignitor);
                //console.log('Igniting '+kdt_nama+' before '+$(this).find('.profil-nama').text());
                appended = true;
                return false;
              }
            });
          }
        }
        if(appended == false){
          $('#kandidat').append(ignitor);
          //console.log("Ignite because it's on the last.");
        }
				$('#profil_'+init).append('<div class="profil-persen">'+kdt_persen+'%</div>');
				$('#profil_'+init).append('<img src="https://graph.facebook.com/'+kdt_fbid+'/picture?type=normal">');
				$('#profil_'+init).append('<div class="profil-content"></div>');
				$('#profil_'+init+' .profil-content').append('<h3 class="profil-nama">'+kdt_nama+'</h3>');
				$('#profil_'+init+' .profil-content').append('<h6 class="profil-kelas">'+kdt_kelas+'</h6>');
				$('#profil_'+init+' .profil-content').append('<div class="profil-suara progress"></div>');
				$('#profil_'+init+' .profil-content .profil-suara').append('<div class="progress-bar progress-bar-'+curStyle+'" role="progressbar" aria-valuenow="'+kdt_persen+'" aria-valuemin="0" aria-valuemax="100"></div>');
			}
			isinya = '<div class="total-suara text-center">'+tot_suara+'/'+tot_pemilih+" "+localize['text_voted_count']+'</div>';
			$('#kandidat').append(isinya);
			liveShow();
			setTimeout(cekPembaruanChart, pembaruan);
			$('#pembaruan').attr('data-tgl',tgl);
			$('#pembaruan').attr('data-status','1');
	});
}
