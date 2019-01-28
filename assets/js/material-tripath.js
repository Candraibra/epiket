
function siswa(aksi,id){
	switch(aksi){
		case "show":
			$('#card_cari').slideUp();
			$('#card_forms').slideDown();
			if($('#siswa_noinduk').prop('disabled'))
				$('#siswa_nama').focus(); else
				$('#siswa_noinduk').focus();
		break;
		case "hide":
			$('#card_cari').slideDown();
			$('#card_forms').slideUp();
		break;
		case "disable_button":
			$('#btn_post, #btn_batal, #btn_option, #siswa_noinduk, #siswa_nama, #siswa_kelas').prop('disabled',true);
		break;
		case "enable_button":
			$('#btn_post, #btn_batal, #btn_option, #siswa_noinduk, #siswa_nama, #siswa_kelas').prop('disabled',false);
		break;
		case "reset":
			$('#siswa_noinduk, #siswa_nama, #siswa_kelas').val("").keyup().prop('disabled',false);
			$('#siswa_id').val("");
			$('#siswa_opt').addClass('hidden');
			$('#btn_batal').removeClass('hidden');
			$('#btn_post').html(localize['btn_add']);
			$('#method').val("");
		break;
		case "batal":
			siswa('hide');
			setTimeout(function(){
				siswa('reset');
			},400);
		break;
		case "tambah":
			siswa('reset');
			$('#method').val("add");
			siswa('show');
		break;
		case "hapus":
			var cfr = confirm(localize['text_confirm_student_delete']);
			if(cfr){
				$('#method').val("delete");
				$('#btn_post').text(localize['btn_delete']).click();
			}
		break;
		case "edit":
			if(id === undefined){
				showNotif(localize['alert_system_error'],"error","danger");
				return false;
			}
			var sending = $.post("./ajax/op_siswa.php",
			{
				id: id,
				aksi: 'fetch'
			});
			sending.fail(function(){
				showNotif(localize['alert_system_error'],'error','danger');
			});
			sending.done(function(data){
				var output = JSON.parse(data);
				switch(output['code']){
					case "403":
						showNotif(output['error'],'error','danger');
					break;
					case "200":
						siswa('reset');
						$('#siswa_id').val(output['no_induk']);
						$('#siswa_noinduk').val(output['no_induk']).keyup().prop('disabled',true);
						$('#siswa_nama').val(output['nama']).keyup();
						$('#siswa_kelas').val(output['kelas']).keyup();
						$('#siswa_opt').removeClass('hidden');
						$('#btn_batal').addClass('hidden');
						$('#btn_post').html(localize['btn_save']);
						$('#method').val("update");
						siswa('show');
					break;
				}
			});
		break;
		case "post":
			var method = $('#method').val().toLowerCase();
			var pt_id = $('#siswa_id').val();
			var pt_noinduk = $('#siswa_noinduk').val();
			var pt_nama = $('#siswa_nama').val();
			var pt_kelas = $('#siswa_kelas').val();
			if(pt_noinduk.length == 0){
				$('#siswa_noinduk').focus();
				return false;
			}
			if(pt_nama.length == 0){
				$('#siswa_nama').focus();
				return false;
			}
			if(pt_kelas.length == 0){
				$('#siswa_kelas').focus();
				return false;
			}
			if(method == "update"){
				if(pt_id.length == 0){
					showNotif(localize['alert_system_error'],"error","danger");
					return false;
				}
				$('#btn_post').text(localize['btn_saving']);
			} else {
				$('#btn_post').text(localize['btn_processing']);
			}
			if(method == "delete"){
				if(pt_id.length == 0){
					showNotif(localize['alert_system_error'],"error","danger");
					return false;
				}
				$('#btn_post').text(localize['btn_processing']);
			}
			siswa('disable_button');
			var sending = $.post("./ajax/op_siswa.php",
			{
				id: pt_id,
				no_induk: pt_noinduk,
				nama: pt_nama,
				kelas: pt_kelas,
				aksi: method
			});
			sending.fail(function(){
				showNotif(localize['alert_system_error'],'error','danger');
				if(method == "update")
					$('#btn_post').text(localize['btn_save']); else
					$('#btn_post').text(localize['btn_add']);
				if(method == "delete")
					$('#btn_post').text(localize['btn_delete']);
				siswa('enable_button');
			});
			sending.done(function(data){
				//console.log(data);
				var output = JSON.parse(data);
				switch(output['code']){
					case "403":
						showNotif(output['error'],'error','danger');
						if(method == "update")
							$('#btn_post').text(localize['btn_save']); else
							$('#btn_post').text(localize['btn_add']);
						if(method == "delete")
							$('#btn_post').text(localize['btn_delete']);
						siswa('enable_button');
					break;
					case "200":
						if(method == "update")
							$('#btn_post').text(localize['btn_save']); else
							$('#btn_post').text(localize['btn_add']);
						var redir = "&kunci="+output['no_induk'];
						if(method == "delete"){
							redir = "";
							$('#btn_post').text(localize['btn_delete']);
						}
						showNotif(output['error'],'done','success');
						$('#btn_post').text(localize['btn_success']);
						siswa('reset');
						siswa('hide');
						setTimeout(function(){
							top.location = './siswa.php?_success'+redir;
						}, 1000);
					break;
				}
			});
		break;
	}
}

function admin(aksi,id){
	switch(aksi){
		case "show":
			$('#card_cari').slideUp();
			$('#card_forms').slideDown();
			if($('#siswa_noinduk').prop('disabled'))
				$('#siswa_nama').focus(); else
				$('#siswa_noinduk').focus();
		break;
		case "hide":
			$('#card_cari').slideDown();
			$('#card_forms').slideUp();
		break;
		case "disable_button":
			$('#btn_post, #btn_batal, #btn_option, #siswa_noinduk, #siswa_nama, #siswa_kelas').prop('disabled',true);
		break;
		case "enable_button":
			$('#btn_post, #btn_batal, #btn_option, #siswa_noinduk, #siswa_nama, #siswa_kelas').prop('disabled',false);
		break;
		case "reset":
			$('#siswa_noinduk, #siswa_nama, #siswa_kelas').val("").keyup().prop('disabled',false);
			$('#siswa_id').val("");
			$('#siswa_opt').addClass('hidden');
			$('#btn_batal').removeClass('hidden');
			$('#btn_post').html(localize['btn_add']);
			$('#method').val("");
		break;
		case "batal":
			admin('hide');
			setTimeout(function(){
				admin('reset');
			},400);
		break;
		case "tambah":
			admin('reset');
			$('#method').val("add");
			admin('show');
		break;
		case "hapus":
			var cfr = confirm(localize['text_confirm_student_delete']);
			if(cfr){
				$('#method').val("delete");
				$('#btn_post').text(localize['btn_delete']).click();
			}
		break;
		case "edit":
			if(id === undefined){
				showNotif(localize['alert_system_error'],"error","danger");
				return false;
			}
			var sending = $.post("./ajax/op_siswa.php",
			{
				id: id,
				aksi: 'fetch'
			});
			sending.fail(function(){
				showNotif(localize['alert_system_error'],'error','danger');
			});
			sending.done(function(data){
				var output = JSON.parse(data);
				switch(output['code']){
					case "403":
						showNotif(output['error'],'error','danger');
					break;
					case "200":
						siswa('reset');
						$('#siswa_id').val(output['no_induk']);
						$('#siswa_noinduk').val(output['no_induk']).keyup().prop('disabled',true);
						$('#siswa_nama').val(output['nama']).keyup();
						$('#siswa_kelas').val(output['kelas']).keyup();
						$('#siswa_opt').removeClass('hidden');
						$('#btn_batal').addClass('hidden');
						$('#btn_post').html(localize['btn_save']);
						$('#method').val("update");
						siswa('show');
					break;
				}
			});
		break;
		case "post":
			var method = $('#method').val().toLowerCase();
			var pt_id = $('#siswa_id').val();
			var pt_noinduk = $('#siswa_noinduk').val();
			var pt_nama = $('#siswa_nama').val();
			var pt_kelas = $('#siswa_kelas').val();
			if(pt_noinduk.length == 0){
				$('#siswa_noinduk').focus();
				return false;
			}
			if(pt_nama.length == 0){
				$('#siswa_nama').focus();
				return false;
			}
			if(pt_kelas.length == 0){
				$('#siswa_kelas').focus();
				return false;
			}
			if(method == "update"){
				if(pt_id.length == 0){
					showNotif(localize['alert_system_error'],"error","danger");
					return false;
				}
				$('#btn_post').text(localize['btn_saving']);
			} else {
				$('#btn_post').text(localize['btn_processing']);
			}
			if(method == "delete"){
				if(pt_id.length == 0){
					showNotif(localize['alert_system_error'],"error","danger");
					return false;
				}
				$('#btn_post').text(localize['btn_processing']);
			}
			siswa('disable_button');
			var sending = $.post("./ajax/op_siswa.php",
			{
				id: pt_id,
				no_induk: pt_noinduk,
				nama: pt_nama,
				kelas: pt_kelas,
				aksi: method
			});
			sending.fail(function(){
				showNotif(localize['alert_system_error'],'error','danger');
				if(method == "update")
					$('#btn_post').text(localize['btn_save']); else
					$('#btn_post').text(localize['btn_add']);
				if(method == "delete")
					$('#btn_post').text(localize['btn_delete']);
				siswa('enable_button');
			});
			sending.done(function(data){
				//console.log(data);
				var output = JSON.parse(data);
				switch(output['code']){
					case "403":
						showNotif(output['error'],'error','danger');
						if(method == "update")
							$('#btn_post').text(localize['btn_save']); else
							$('#btn_post').text(localize['btn_add']);
						if(method == "delete")
							$('#btn_post').text(localize['btn_delete']);
						siswa('enable_button');
					break;
					case "200":
						if(method == "update")
							$('#btn_post').text(localize['btn_save']); else
							$('#btn_post').text(localize['btn_add']);
						var redir = "&kunci="+output['no_induk'];
						if(method == "delete"){
							redir = "";
							$('#btn_post').text(localize['btn_delete']);
						}
						showNotif(output['error'],'done','success');
						$('#btn_post').text(localize['btn_success']);
						siswa('reset');
						siswa('hide');
						setTimeout(function(){
							top.location = './siswa.php?_success'+redir;
						}, 1000);
					break;
				}
			});
		break;
	}
}
function guru(aksi,id){
	switch(aksi){
		case "show":
			$('#card_cari').slideUp();
			$('#card_forms').slideDown();
			if($('#guru_noinduk').prop('disabled'))
				$('#guru_nama').focus(); else
				$('#guru_noinduk').focus();
		break;
		case "hide":
			$('#card_cari').slideDown();
			$('#card_forms').slideUp();
		break;
		case "disable_button":
			$('#btn_post, #btn_batal, #btn_option, #guru_noinduk, #guru_nama, #guru_jabatan').prop('disabled',true);
		break;
		case "enable_button":
			$('#btn_post, #btn_batal, #btn_option, #guru_noinduk, #guru_nama, #guru_jabatan').prop('disabled',false);
		break;
		case "reset":
			$('#guru_noinduk, #guru_nama, #guru_jabatan').val("").keyup().prop('disabled',false);
			$('#guru_id').val("");
			$('#guru_opt').addClass('hidden');
			$('#btn_batal').removeClass('hidden');
			$('#btn_post').html(localize['btn_add']);
			$('#method').val("");
		break;
		case "batal":
			guru('hide');
			setTimeout(function(){
				guru('reset');
			},400);
		break;
		case "tambah":
			guru('reset');
			$('#method').val("add");
			guru('show');
		break;
		case "hapus":
			var cfr = confirm(localize['text_confirm_staff_delete']);
			if(cfr){
				$('#method').val("delete");
				$('#btn_post').text(localize['btn_delete']).click();
			}
		break;
		case "edit":
			if(id === undefined){
				showNotif(localize['alert_system_error'],"error","danger");
				return false;
			}
			var sending = $.post("./ajax/op_guru.php",
			{
				id: id,
				aksi: 'fetch'
			});
			sending.fail(function(){
				showNotif(localize['alert_system_error'],'error','danger');
			});
			sending.done(function(data){
				var output = JSON.parse(data);
				switch(output['code']){
					case "403":
						showNotif(output['error'],'error','danger');
					break;
					case "200":
						guru('reset');
						$('#guru_id').val(output['no_induk']);
						$('#guru_noinduk').val(output['no_induk']).keyup().prop('disabled',true);
						$('#guru_nama').val(output['nama']).keyup();
						$('#guru_jabatan').val(output['jabatan']).keyup();
						$('#guru_opt').removeClass('hidden');
						$('#btn_batal').addClass('hidden');
						$('#btn_post').html(localize['btn_save']);
						$('#method').val("update");
						guru('show');
					break;
				}
			});
		break;
		case "post":
			var method = $('#method').val().toLowerCase();
			var pt_id = $('#guru_id').val();
			var pt_noinduk = $('#guru_noinduk').val();
			var pt_nama = $('#guru_nama').val();
			var pt_jabatan = $('#guru_jabatan').val();
			if(pt_noinduk.length == 0){
				$('#guru_noinduk').focus();
				return false;
			}
			if(pt_nama.length == 0){
				$('#guru_nama').focus();
				return false;
			}
			if(pt_jabatan.length == 0){
				$('#guru_jabatan').focus();
				return false;
			}
			if(method == "update"){
				if(pt_id.length == 0){
					showNotif(localize['alert_system_error'],"error","danger");
					return false;
				}
				$('#btn_post').text(localize['btn_saving']);
			} else {
				$('#btn_post').text(localize['btn_processing']);
			}
			if(method == "delete"){
				if(pt_id.length == 0){
					showNotif(localize['alert_system_error'],"error","danger");
					return false;
				}
				$('#btn_post').text(localize['btn_processing']);
			}
			guru('disable_button');
			var sending = $.post("./ajax/op_guru.php",
			{
				id: pt_id,
				no_induk: pt_noinduk,
				nama: pt_nama,
				jabatan: pt_jabatan,
				aksi: method
			});
			sending.fail(function(){
				showNotif(localize['alert_system_error'],'error','danger');
				if(method == "update")
					$('#btn_post').text(localize['btn_save']); else
					$('#btn_post').text(localize['btn_add']);
				if(method == "delete")
					$('#btn_post').text(localize['btn_delete']);
				guru('enable_button');
			});
			sending.done(function(data){
				//console.log(data);
				var output = JSON.parse(data);
				switch(output['code']){
					case "403":
						showNotif(output['error'],'error','danger');
						if(method == "update")
							$('#btn_post').text(localize['btn_save']); else
							$('#btn_post').text(localize['btn_add']);
						if(method == "delete")
							$('#btn_post').text(localize['btn_delete']);
						guru('enable_button');
					break;
					case "200":
						if(method == "update")
							$('#btn_post').text(localize['btn_save']); else
							$('#btn_post').text(localize['btn_add']);
						var redir = "&kunci="+output['no_induk'];
						if(method == "delete"){
							redir = "";
							$('#btn_post').text(localize['btn_delete']);
						}
						showNotif(output['error'],'done','success');
						$('#btn_post').text(localize['btn_success']);
						guru('reset');
						guru('hide');
						setTimeout(function(){
							top.location = './guru.php?_success'+redir;
						}, 1000);
					break;
				}
			});
		break;
	}
}
function changeLanguage(lang){
	var curLang = $.cookie("el_lang");
	if(lang == curLang) return false;
	$("html").append("<div id='box-overlay'></div>");
	$("body").addClass("blur");
	$("#box-overlay").fadeIn(500);
	$.cookie("el_lang", lang, {path: '/'});
	setTimeout(function(){
		window.location.reload();
	}, 1000);
}
