$( window ).scroll(function() {
     if($(window).scrollTop() > 400){
       $('.header').css({'position': 'fixed'});
       $('.header').css({'top': '0px'});

       // $('.banner').css({'display': 'none'});
     }else{
         $('.header').css({'position': 'relative'});
         $('.header').css({'top': '0'});


         // $('.banner').css({'display': 'block'});


     }

});
