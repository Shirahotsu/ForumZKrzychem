$( window ).scroll(function() {
     if($(window).scrollTop() > 400){
       $('.header').css({'position': 'fixed'});
       $('.header').css({'margin-top': '0'});
       // $('.banner').css({'display': 'none'});
     }else{
         $('.header').css({'position': 'absolute'});
         $('.header').css({'margin-top': '400px'});


         // $('.banner').css({'display': 'block'});


     }

});
$(document).ready(function(){
  $('#profileBtn').on('click',dropdown);
});

function dropdown(){
  $('.loginForm').css({'transform':'translateX(500px)'});
}
