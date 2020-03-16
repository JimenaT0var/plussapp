<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro de Horarios</title>
  </head>
  <style>
  </style>
  <body>
    <form class="content" action="{{route('altausuario')}}" method="post">
    
      <center>
      <h1>ALTA HORARIOS </h1>
      Hora:<input type="text" name="hora_h" onblur="fieldSize1()" id="hora_h" pattern="[0-9a-z:]+" placeholder="Hora">
      <p id="error1"></p>
      Color:<input type="text" name="color" onblur="fieldSize2()" id="color" pattern="[a-zA-Z]+" placeholder="Color">
      <p id="error2"></p>
      <input type="submit" value="Registrar">
      </center>
    </form>


    <script type="text/javascript">
    const $input1 = document.querySelector("#hora_h");
    const patron1 = /[0-9a-z:]+/;

    $input1.addEventListener("keydown", event => {
      if (patron1.test(event.key)){
        document.getElementById('hora_h').style.border = "1px solid #49AF13";
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
      var nom = document.getElementById('hora_h').value;
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
    const $input2 = document.querySelector("#color");
    const patron2 = /[a-zA-Z ]+/;

    $input2.addEventListener("keydown", event => {
      if (patron2.test(event.key)){
        document.getElementById('color').style.border = "1px solid #49AF13";
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
      var apellido = document.getElementById('color').value;
      if (apellido.length>=5 && apellido.length<=30) {
        document.getElementById('error2').innerHTML = "";
      }
      else {
        document.getElementById('error2').innerHTML = "Error: Tamaño del texto.";
        document.getElementById('color').style.border = "1px solid #EF0D0D";
      }
    }
    </script>
  </body>
</html>
