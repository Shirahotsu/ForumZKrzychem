  var p;
  var btns = [];
  var i = 1;
  while( i<=4){
    btns[i] = document.getElementById('i'+i);
     i++
  }
  btns[1].onclick = function() {chColor("#i1")};
  btns[2].onclick = function() {chColor("#i2")};
  btns[3].onclick = function() {chColor("#i3")};
  btns[4].onclick = function() {chColor("#i4")};

function chColor(p){
  $(p).css({'background-color': '#fff'});

}

$('#reg').on('mouseover', chBgc);
$('#reg').on('mouseleave', ChBtc2);
function chBgc(){
  $('#regDiv').css({'background-color': '#5739b5'});
  $('.registerInput').css({'opacity': '0'});
}

function ChBtc2(){
  $('#regDiv').css({'background-color': '#fff'});
  $('.registerInput').css({'opacity': '1'});
}
///JEBNIJ PENTLE SYNU
