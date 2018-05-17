
$(function(){
  $('#email').focus(function(){ //input email
    $(this).css("background-color","orange");
    $('input').blur(function(){ //input name
      $(this).css("background-color","white");
    });
  });
  //$('#text1').fadeIn(30);
  $('.img-fluid').show(2000,function(){
    $('#img').css({"max-width":"100%","box-shadow":" 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)"
  });
});

$('label').addClass('font');
$('#check').css({
  "color":"blue",
  "size":"20px"});
$('body').find("h2").css({"color":"red"});
$('.scrolly').scrolly();
});
