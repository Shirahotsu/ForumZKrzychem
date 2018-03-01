$('#zh').on('click', chPsswd);
$('#zm').on('click', chMail);

function chPsswd(){
  $( ".zm" ).remove();
  $( ".z" ).remove();
  var f = document.createElement("form");
  f.setAttribute('method',"post");
  f.setAttribute('action',"submit.php");
  f.setAttribute('class',"z");

  var i = document.createElement("input");
  i.setAttribute('type',"password");
  i.setAttribute('name',"oldPassword");
  i.setAttribute('placeholder',"Stare hasło");

  var i2 = document.createElement("input");
  i2.setAttribute('type',"password");
  i2.setAttribute('name',"newPassword");
  i2.setAttribute('placeholder',"Nowe hasło");


  var i3 = document.createElement("input");
  i3.setAttribute('type',"password");
  i3.setAttribute('name',"rewPassword");
  i3.setAttribute('placeholder',"Powtórz Hasło");


  var s = document.createElement("input");
  s.setAttribute('type',"submit");
  s.setAttribute('value',"Zmień hasło");
  s.setAttribute('class',"btn-info btn loginBtn");

  f.appendChild(i);
  f.appendChild(i2);
  f.appendChild(i3);
  f.appendChild(s);

  document.getElementsByTagName('chPsswd')[0].appendChild(f);
}

function chMail(){
  $( ".zm" ).remove();
  $( ".z" ).remove();
  var f = document.createElement("form");
  f.setAttribute('method',"post");
  f.setAttribute('action',"submit.php");
  f.setAttribute('class',"zm");

  var i = document.createElement("input");
  i.setAttribute('type',"name");
  i.setAttribute('name',"email");
  i.setAttribute('placeholder',"Nowy email");

  var i2 = document.createElement("input");
  i2.setAttribute('type',"password");
  i2.setAttribute('name',"newPassword");
  i2.setAttribute('placeholder',"Hasło");

  var s = document.createElement("input");
  s.setAttribute('type',"submit");
  s.setAttribute('value',"Zmień email");
  s.setAttribute('class',"btn-info btn loginBtn");

  f.appendChild(i);
  f.appendChild(i2);
  f.appendChild(s);

  document.getElementsByTagName('chMail')[0].appendChild(f);
}

  //
  // <input type="name" name="name" placeholder="Nowy email">
  // <input type="password" name="password" placeholder="Hasło">
  // <input type="submit" class="btn-info btn loginBtn" value="Zmień email">
