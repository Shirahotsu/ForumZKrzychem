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
// $(document).ready(function(){
//   $('#profileBtn').on('click',dropdown);
// });
//
// function dropdown(){
//   $('.loginForm').css({'transform':'translateX(500px)'});
// }

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('#profileBtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
};
