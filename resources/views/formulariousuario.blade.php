<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro de Usuarios</title>
  </head>
  <style>
  </style>
  <body>
    <form class="content" action="{{route('altausuario')}}" method="post">
    
      <center>
      <h1>ALTA USUARIO </h1>
      Nombre:<input type="text" name="nom_u" onblur="fieldSize1()" id="nombre" pattern="[a-zA-Z]+" placeholder="Nombre(s)">
      <p id="error1"></p>
      Apellido paterno:<input type="text" name="app_u" onblur="fieldSize2()" id="app_u" pattern="[a-zA-Z]+" placeholder="Apellido Paterno">
      <p id="error2"></p>
      Apellido materno:<input type="text" name="apm_u" onblur="fieldSize3()" id="apm_u" pattern="[a-zA-Z]+" placeholder="Apellido Materno">
      <p id="error3"></p>
      Fecha de nacimiento:<input type="text" name="fn_u" onblur="fieldSize4()" id="fn_u" pattern="[0-9\/]+" placeholder="Fecha de Nacimiento">
      <p id="error4"></p>
      Genero:<select name="Genero" onblur="fieldSize5()" id="genero" pattern="[F]|[M]+">
        <option>-------</option>
        <option value="0">Femenino</option>
        <option value="1">Masculino</option>
      </select>
      <p id="error5"></p>
      Colonia:<input type="text" name="colonia_u" onblur="fieldSize6()" id="colonia_u" pattern="[a-zA-Z0-9]+" placeholder="Colonia">
      <p id="error6"></p>
      Typeuser<input type="text" name="typeuser" onblur="fieldSize7()" id="typeuser" pattern="[a-zA-Z]+" placeholder="Tipo de usuario">
      <p id="error7"></p>
      Calle:<input type="text" name="calle" onblur="fieldSize8()" id="calle" pattern="[a-zA-Z0-9]+" placeholder="Calle">
      <p id="error8"></p>
      Municipio:<input type="text" name="mum_u" onblur="fieldSize9()" id="mum_u" pattern="[a-zA-Z0-9]+" placeholder="Municipio">
      <p id="error9"></p>
      Correo:<input type="text" name="correo" onblur="fieldSize8()" id="correo" pattern="[a-zA-Z0-9\/.*@]+" placeholder="Email">
      <p id="error10"></p>
      Verificar correo:<input type="Email" name="vercorreo" onblur="fieldSize8()" id="vercorreo" pattern="[a-zA-Z0-9\/.*@]+" placeholder="Verificar correo">
      <p id="error11"></p>
      Password:<input type="password" name="password" onblur="fieldSize9()" id="password" pattern="[a-zA-Z0-9]+" placeholder="Password">
      <p id="error12"></p>
      Verificar password:<input type="password" name="password" onblur="fieldSize9()" id="password" pattern="[a-zA-Z0-9]+" placeholder="Verificar password">
      <p id="error13"></p>
      <input type="submit" value="Registrar">
      </center>
    </form>


    <script type="text/javascript">
    const $input1 = document.querySelector("#nom_u");
    const patron1 = /[a-zA-Z ]+/;

    $input1.addEventListener("keydown", event => {
      if (patron1.test(event.key)){
        document.getElementById('nom_u').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize1() {
      var nom = document.getElementById('nom_u').value;
      if (nom.length>=3 && nom.length<=30) {
        document.getElementById('error1').innerHTML = "";
      }
      else {
        document.getElementById('error1').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('nom_u').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input2 = document.querySelector("#app_u");
    const patron2 = /[a-zA-Z ]+/;

    $input2.addEventListener("keydown", event => {
      if (patron2.test(event.key)){
        document.getElementById('app_u').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize2() {
      var app = document.getElementById('app_u').value;
      if (app.length>=5 && app.length<=30) {
        document.getElementById('error2').innerHTML = "";
      }
      else {
        document.getElementById('error2').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('app_u').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input3 = document.querySelector("#apm_u");
    const patron3 = /[a-zA-Z ]+/;

    $input3.addEventListener("keydown", event => {
      if (patron3.test(event.key)){
        document.getElementById('apm_u').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize3() {
      var apm = document.getElementById('apm_u').value;
      if (apm.length>=5 && apm.length<=30) {
        document.getElementById('error3').innerHTML = "";
      }
      else {
        document.getElementById('error3').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('apm_u').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input4 = document.querySelector("#fn_u");
    const patron4 = /[0-9\/]+/;

    $input4.addEventListener("keydown", event => {
      if (patron4.test(event.key)){
        document.getElementById('fn_u').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize4() {
      var fn = document.getElementById('fn_u').value;
      if (fn.length>=10 && fn.length==10) {
        document.getElementById('error4').innerHTML = "";
      }
      else {
        document.getElementById('error4').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('fn_u').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input5 = document.querySelector("#genero");
    const patron5 = /[F]|[M]/;

    $input5.addEventListener("keydown", event => {
      if (patron5.test(event.key)){
        document.getElementById('genero').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize5() {
      var genero = document.getElementById('genero').value;
      if (genero==F && genero==M) {
        document.getElementById('error5').innerHTML = "";
      }
      else {
        document.getElementById('error5').innerHTML = "Error: Selecciona una opción.";
        document.getElementById('genero').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input6 = document.querySelector("#colonia_u");
    const patron6 = /[a-zA-Z0-9]+/;

    $input6.addEventListener("keydown", event => {
      if (patron6.test(event.key)){
        document.getElementById('colonia_u').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize6() {
      var colonia = document.getElementById('colonia_u').value;
      if (colonia.length>=9 && colonia.length<=16) {
        document.getElementById('error6').innerHTML = "";
      }
      else {
        document.getElementById('error6').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('colonia_u').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input7 = document.querySelector("#typeuser");
    const patron7 = /[a-zA-Z]+/;

    $input7.addEventListener("keydown", event => {
      if (patron7.test(event.key)){
        document.getElementById('typeuser').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize7() {
      var typeuser = document.getElementById('typeuser').value;
      if typeuser.length>=9 && typeuser.length<=16) {
        document.getElementById('error7').innerHTML = "";
      }
      else {
        document.getElementById('error7').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('typeuser').style.border = "1px solid #EF0D0D";
      }
    }
    </script>


<script type="text/javascript">
    const $input8 = document.querySelector("#calle");
    const patron8 = /[a-zA-Z0-9]+/;

    $input8.addEventListener("keydown", event => {
      if (patron8.test(event.key)){
        document.getElementById('calle').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize8() {
      var calle = document.getElementById('calle').value;
      if (calle.length>=9 && calle.length<=16) {
        document.getElementById('error8').innerHTML = "";
      }
      else {
        document.getElementById('error8').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('calle').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

<script type="text/javascript">
    const $input9 = document.querySelector("#mum_u");
    const patron9 = /[a-zA-Z0-9]+/;

    $input9.addEventListener("keydown", event => {
      if (patron9.test(event.key)){
        document.getElementById('mum_u').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize9() {
      var mum = document.getElementById('mum_u').value;
      if (mum.length>=9 && mum.length<=16) {
        document.getElementById('error10').innerHTML = "";
      }
      else {
        document.getElementById('error10').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('mum_u').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input10 = document.querySelector("#correo");
    const patron10 = /[a-zA-Z0-9\/.*@]/;

    $input10.addEventListener("keydown", event => {
      if (patron10.test(event.key)){
        document.getElementById('correo').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize8() {
      var correo = document.getElementById('correo').value;
      if (correo.length>=10 && correo.length<=30) {
        document.getElementById('error10').innerHTML = "";
      }
      else {
        document.getElementById('error10').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('correo').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

<script type="text/javascript">
    const $input11 = document.querySelector("#vercorreo");
    const patron11 = /[a-zA-Z0-9\/.*@]/;

    $input11.addEventListener("keydown", event => {
      if (patron11.test(event.key)){
        document.getElementById('vercorreo').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize8() {
      var vercorreo = document.getElementById('vercorreo').value;
      if (vercorreo.length>=10 && vercorreo.length<=30) {
        document.getElementById('error11').innerHTML = "";
      }
      else {
        document.getElementById('error11').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('vercorreo').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input12 = document.querySelector("#password");
    const patron12 = /[a-zA-Z0-9]+/;

    $input12.addEventListener("keydown", event => {
      if (patron12.test(event.key)){
        document.getElementById('password').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize9() {
      var password = document.getElementById('password').value;
      if (password.length>=8 && password.length<=12) {
        document.getElementById('error12').innerHTML = "";
      }
      else {
        document.getElementById('error12').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('password').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

<script type="text/javascript">
    const $input13 = document.querySelector("#verpassword");
    const patron13 = /[a-zA-Z0-9]+/;

    $input13.addEventListener("keydown", event => {
      if (patron13.test(event.key)){
        document.getElementById('verpassword').style.border = "1px solid #49AF13";
      }
      else {
        if (event.keyCode==8) {
          //console.log("backspace");
        }
        else {
          event.preventDefault();
          //var tcla = event.keyCode;
          //console.log(tcla);
        }
      }
    });

    //------------------------------------
    function fieldSize9() {
      var verpassword = document.getElementById('verpassword').value;
      if (verpassword.length>=8 && verpassword.length<=12) {
        document.getElementById('error13').innerHTML = "";
      }
      else {
        document.getElementById('error13').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('verpassword').style.border = "1px solid #EF0D0D";
      }
    }
    </script>
  </body>
</html>
