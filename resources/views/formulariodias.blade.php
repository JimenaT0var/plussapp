<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro de Dias</title>
  </head>
  <style>
  </style>
  <body>
    <form class="content" action="{{route('altausuario')}}" method="post">
    
      <center>
      <h1>ALTA Dias </h1>
      Dia:<input type="text" name="dia" onblur="fieldSize1()" id="dia" pattern="[a-zA-Z]+" placeholder="Dia">
      <p id="error1"></p>
      Color:<input type="text" name="fecha" onblur="fieldSize2()" id="fecha" pattern="[0-9\/]+" placeholder="Color">
      <p id="error2"></p>
      <input type="submit" value="Registrar">
      </center>
    </form>


    <script type="text/javascript">
    const $input1 = document.querySelector("#dia");
    const patron1 = /[a-zA-Z]+/;

    $input1.addEventListener("keydown", event => {
      if (patron1.test(event.key)){
        document.getElementById('dia').style.border = "1px solid #49AF13";
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
      var nom = document.getElementById('dia').value;
      if (nom.length>=3 && nom.length<=30) {
        document.getElementById('error1').innerHTML = "";
      }
      else {
        document.getElementById('error1').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('hora_h').style.border = "1px solid #EF0D0D";
      }
    }
    </script>

    <script type="text/javascript">
    const $input2 = document.querySelector("#dia");
    const patron2 = /[0-9\/]+/;

    $input2.addEventListener("keydown", event => {
      if (patron2.test(event.key)){
        document.getElementById('dia').style.border = "1px solid #49AF13";
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
      var apellido = document.getElementById('dia').value;
      if (apellido.length>=5 && apellido.length<=30) {
        document.getElementById('error2').innerHTML = "";
      }
      else {
        document.getElementById('error2').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('dia').style.border = "1px solid #EF0D0D";
      }
    }
    </script>
  </body>
</html>
