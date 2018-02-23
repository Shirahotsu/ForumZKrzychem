  var p;
  var btns = [];
  var i = 1;
  while( i<=3){
    btns[i] = document.getElementById('i'+i);
     i++
  }
  btns[1].onclick = function() {chColor("1")};
  btns[2].onclick = function() {chColor("2")};
  btns[3].onclick = function() {chColor("3")};
  btns[4].onclick = function() {chColor("4")};

function chColor(p){
  $(p).css({'background-color': 'red'});

}

///JEBNIJ PENTLE SYNU
