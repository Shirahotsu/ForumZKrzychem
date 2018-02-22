$( window ).scroll(function() {
     if($(window).scrollTop() > 296){
       $('.header').css({'position': 'fixed'});
       $('.header').css({'top': '0'});
       // $('.banner').css({'display': 'none'});
     }else{
         $('.header').css({'position': 'absolute'});
         $('.header').css({'top': '296px'});


         // $('.banner').css({'display': 'block'});


     }

});
