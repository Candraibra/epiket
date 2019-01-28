function nextPassword(){
  $('#form-induk').slideUp();
  $('#form-pass').slideDown();
  setTimeout(function(){
    $('#sandi').focus();
    $("#subtitle_1").slideUp();
    $("#subtitle_2").slideDown();
  }, 500);
};
function batalPass(){
  $('#form-induk').slideDown();
  $('#form-pass').slideUp();
  $("#subtitle_2").fadeOut(500, function(){
    $("#subtitle_1").fadeIn(500);
  });
	resetNext();
	$('#noinduk').focus().select();
}
function resetNext(){
	$('#buttoner').html(localize['btn_next']);
	$('#buttoner, #noinduk').removeAttr("disabled");
}
function alert(text){
  showNotif(text, "error", "danger");
}
function cekNoInduk(){
	var noinduk = $('#noinduk').val();
	if(noinduk.length < 4){
		$('#noinduk').focus();
		return false;
	}
  $(".loader").css("opacity","1");
	$('#buttoner').html(localize['btn_please_wait']);
	$('#buttoner, #noinduk').attr("disabled","disabled");
	var sending = $.post("./ajax/login.php",
    {
        step: "1",
        noinduk: noinduk
    });
	sending.fail(function(){
		alert(localize['alert_system_error']);
    $(".loader").css("opacity","0");
		resetNext();
	});
	sending.done(function(data){
		switch(data){
			case "false":
        var tries = 5 - parseInt($.cookie("blocked_num"));
				alert("<strong>"+localize['alert_id_404']+"</strong><br /> "+tries+localize['alert_attempts']);
				resetNext();
				return;
			break;
			case "blocked":
				alert("<strong>"+localize['alert_blocked']+"</strong>");
				resetNext();
				return;
			break;
			default:
        console.log(data);
        data = JSON.parse(data);
        $("#subtitle_2 .web_title_2").text(data['nama']);
        $("#subtitle_2 .web_title_3").text(data['role']);
        $("#not-me").text(data['not_me']);
				nextPassword();
			break;
		}
    $(".loader").css("opacity","0");
	});
}
$('#buttoner').click(cekNoInduk);
$('#noinduk').keypress(function (e) {
	var key = e.which;
	if(key == 13){
		e.preventDefault();
		cekNoInduk();
	}
});

function resetNexts(){
	$('#buttoners').html(localize['btn_login']);
	$('#buttoners').removeAttr("disabled");
}
function login(){
	var noinduk = $('#noinduk').val();
	var sandi = $('#sandi').val();
  $(".loader").css("opacity","1");
	$('#buttoners').html(localize['btn_please_wait']);
	$('#buttoners').attr("disabled","disabled");
	var sending = $.post("./ajax/login.php",
    {
        step: "2",
        noinduk: noinduk,
		sandi: sandi
    });
	sending.fail(function(){
		alert(localize['alert_system_error']);
		resetNext();
    $(".loader").css("opacity","0");
	});
	sending.done(function(data){
		switch(data){
			case "false":
        var tries = 5 - parseInt($.cookie("blocked_num"));
				alert("<strong>"+localize['alert_password_incorrect']+"</strong><br /> "+tries+localize['alert_attempts']);
				resetNexts();
				return;
			break;
			case "blocked":
				alert("<strong>"+localize['alert_blocked']+"</strong>");
				resetNexts();
				return;
			break;
			case "success":
				$('#buttoners').html(localize['btn_success']);
				setTimeout(function(){
					$('#buttoners').html(localize['btn_redirecting']);
				},1000);
				top.location = './index.php?logged_in=true';
				return;
			break;
			default:
				alert(data);
				resetNexts();
				return;
			break;
		}
    $(".loader").css("opacity","0");
	});
}
$('#buttoners').click(login);
$("#not-me").click(batalPass);
$('#sandi').keypress(function (e) {
	var key = e.which;
	if(key == 13){
		e.preventDefault();
		login();
	}
});

setTimeout(function(){
  $('#noinduk').focus();
}, 100);
