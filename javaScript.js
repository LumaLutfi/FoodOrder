
$(function(){
  $('#email').focus(function(){
    $(this).css("background-color","orange");
    $('input').blur(function(){
      $(this).css("background-color","white");
    });
  });
  $('#text1').fadeIn(7000);
  /*$('.img-fluid').animate({height:'300px',opacity:'0.4'},2000);
  $('.img-fluid').animate({width:'300px',opacity:'0.8'},2000);
  $('.img-fluid').animate({height:'300px',opacity:'0.4'},2000);
  $('.img-fluid').animate({width:'1100px',opacity:'0.8'},2000);*/
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
