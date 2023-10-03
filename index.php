<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="icon" href="icono.png">
	<title>Calculadora en HTML y PHP</title>
</head>
<body>
	<style type="text/css">

		.fondo {
			background-color: black;
			width: 400px;
			height: 520px;
			border-radius: 20px;
		}

		.resultado {
			background-color: whitesmoke;
			width: 300px;
			height: 50px;
			margin-right: 50px;
			margin-left: 50px;
			border: none;
			border-radius: 10px;
			margin: 50px;
			font-family: Consolas;
			font-size: 25px;
			text-align: right;
		}

		.boton {
			background-color: #D1D1D1;
			width: 70px;
			height: 70px;
			margin-left: 50px;
			border: none;
			border-radius: 100%;
			font-family: Consolas;
			font-size: 25px;
		}

		.boton1 {
			background-color: #D1D1D1;
			width: 70px;
			height: 70px;
			margin-left: 3.333333px;
			border: none;
			border-radius: 100%;
			font-family: Consolas;
			font-size: 25px;
		}

		.boton2 {
			background-color: #88E8E1;
			width: 70px;
			height: 70px;
			margin-left: 3.333333px;
			border: none;
			border-radius: 100%;
			font-family: Consolas;
			font-size: 25px;
		}

		.etiqueta {
			background-color: black;
			width: 400px;
			height: 30px;
			border-radius: 20px;
			text-align: center;
			color: whitesmoke;
			margin: 5;
			font-family: Consolas;
			font-size: 22px;
		}
	</style>
	<form name="calculator" class="fondo" style="margin-top: 5px">
	    <input class="resultado" type="textfield" name="ans" value="">
	    <br>
	    <input type="button" class="boton" value="1" onClick="document.calculator.ans.value+='1'">
	    <input type="button" value="2" class="boton1" onClick="document.calculator.ans.value+='2'">
	    <input type="button" class="boton1" value="3" onClick="document.calculator.ans.value+='3'">
	    <input type="button" class="boton2" value="+" onClick="document.calculator.ans.value+='+'">
	    <br>
	    <br>
	    <input type="button" class="boton" value="4" onClick="document.calculator.ans.value+='4'">
	    <input type="button" class="boton1" value="5" onClick="document.calculator.ans.value+='5'">
	    <input type="button" class="boton1" value="6" onClick="document.calculator.ans.value+='6'">
	    <input type="button" class="boton2" value="-" onClick="document.calculator.ans.value+='-'">
	    <br>
	    <br>
	    <input type="button" class="boton" value="7" onClick="document.calculator.ans.value+='7'">
	    <input type="button" class="boton1" value="8" onClick="document.calculator.ans.value+='8'">
	    <input type="button" class="boton1" value="9" onClick="document.calculator.ans.value+='9'">
	    <input type="button" class="boton2" value="X" onClick="document.calculator.ans.value+='*'">
	    <br>
	    <br>
	    <input type="button" class="boton" value="0" onClick="document.calculator.ans.value+='0'">
	    <input type="reset" class="boton1" value="AC">
	    <input type="button" class="boton1" value="/" onClick="document.calculator.ans.value+='/'">
	    <input type="button" class="boton2" value="=" onClick="document.calculator.ans.value=eval(document.calculator.ans.value)">
    </form>

</body>
</html>