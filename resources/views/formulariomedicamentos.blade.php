<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro de Medicamentos</title>
  </head>
  <style>
  </style>
  <body>
    <form class="content" action="{{route('altausuario')}}" method="post">
    
      <center>
      <h1>ALTA Medicamento </h1>
      Nombre:<input type="text" name="nom_m" onblur="fieldSize1()" id="nombre" pattern="[a-zA-Z]+" placeholder="Nombre(s)">
      <p id="error1"></p>
      :<input type="text" name="desc" onblur="fieldSize4()" id="desc" pattern="[a-zA-Z]+" placeholder="">
      <p id="error2"></p>
      Solucion:<input type="text" name="solucion_m" onblur="fieldSize6()" id="solucion_m" pattern="[a-zA-Z0-9]+" placeholder="Solucion">
      <p id="error3"></p>
      Porcion<input type="text" name="porcion" onblur="fieldSize7()" id="porcion_m" pattern="[a-zA-Z0-9]+" placeholder="Porcion">
      <p id="error4"></p>
      Existencia:<input type="text" name="existencia" onblur="fieldSize8()" id="existencia" pattern="[a-zA-Z0-9]+" placeholder="Existencia">
      <p id="error5"></p>
      Caducidad:<input type="text" name=caducidad onblur="fieldSize9()" id="caducidad" pattern="[a-zA-Z0-9\/.*@]+" placeholder="Caducidad">
      <p id="error6"></p>
      <input type="submit" value="Registrar">
      </center>
    </form>


    <script type="text/javascript">
    const $input1 = document.querySelector("#nom_m");
    const patron1 = /[a-zA-Z ]+/;

    $input1.addEventListener("keydown", event => {
      if (patron1.test(event.key)){
        document.getElementById('nom_m').style.border = "1px solid #49AF13";
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
      var nom = document.getElementById('nom_m').value;
      if (nom.length>=3 && nom.length<=30) {
        document.getElementById('error1').innerHTML = "";
      }
      else {
        document.getElementById('error1').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('nom_m').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input2 = document.querySelector("#desc");
    const patron2 = /[a-zA-Z ]+/;

    $input2.addEventListener("keydown", event => {
      if (patron2.test(event.key)){
        document.getElementById('desc').style.border = "1px solid #49AF13";
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
      var desc = document.getElementById('desc').value;
      if (desc.length>=5 && desc.length<=30) {
        document.getElementById('error2').innerHTML = "";
      }
      else {
        document.getElementById('error2').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('desc').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input3 = document.querySelector("#solucion");
    const patron3 = /[a-zA-Z0-9]+/;

    $input3.addEventListener("keydown", event => {
      if (patron3.test(event.key)){
        document.getElementById('solucion').style.border = "1px solid #49AF13";
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
      var solucion = document.getElementById('solucion').value;
      if (solucion.length>=5 && solucion.length<=30) {
        document.getElementById('error3').innerHTML = "";
      }
      else {
        document.getElementById('error3').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('solucion').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input4 = document.querySelector("#porcion");
    const patron4 = /[0-9\/]+/;

    $input4.addEventListener("keydown", event => {
      if (patron4.test(event.key)){
        document.getElementById('porcion').style.border = "1px solid #49AF13";
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
      var fn = document.getElementById('porcion').value;
      if (porcion.length>=10 && fn.length==10) {
        document.getElementById('error4').innerHTML = "";
      }
      else {
        document.getElementById('error4').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('porcion').style.border = "1px solid #EF0D0D";
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
