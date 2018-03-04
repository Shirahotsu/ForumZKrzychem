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


  $(document).ready(function(){
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("posty").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","postyNastronie.php?post=0",true);
        xmlhttp.send();
});



// //wyslanie danych
// $(pszycisk).on('click', funcion(){
//   var elo = $('id nawzwy').val();
//   if($.trim(elo)!=''){
//     $.post('nwm.php', {elo: name}, function(data){
//       $('jakisdiv').text(data);
//     });
//   }
// })


// <button type="button" class="btn btn-default" onclick="showUser()">
//
// </button>
// <div id="txtHint"><b>Person info will be listed here...</b></div>
