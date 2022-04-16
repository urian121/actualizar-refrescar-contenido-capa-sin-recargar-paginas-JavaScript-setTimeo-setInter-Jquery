<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>contador</title>
	<link rel="stylesheet" href="">
</head>
<body>
<br><br>



<center>
<div id="count_click"></div>
<button name="count_click">AÑADIR CLICK</button>

<br><br>
<h1 id="contador">Contador aqui click</h1>
<span id="resultado"></span>
</center>
	


<script  src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script type="text/javascript">
//PONE EL CONTADOR A 0
var count_click = 0;

//AÑADE UN CLICK AL EJECUTAR LA FUNCIÓN
function count_click_add() {
  count_click += 5;
}


//AÑADE A TODOS LOS BOTONES CON EL NAME count_click QUE AL SER PULSADOS EJECUTEN EL CONTADOR
$( document ).ready(function(){
  $("button[name='count_click']").click(function(){
     count_click_add();
     console.log(count_click);
     $("#count_click").text(count_click);
     $("#count_click").html(count_click);
  });


var countador =0;
$("#contador").click(function(){
  countador += 1;

     $("#resultado").html(countador);
  });

});
</script>
</body>
</html>