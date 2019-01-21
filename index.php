<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Calculadora</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript">
            // Oculta el campo de numero 2 cuando solo sea necesario 1 numero
            function toggle(elemento){
                if(elemento.value=="raizCuadrada" || elemento.value=="seno" || elemento.value=="coseno" || elemento.value=="tangente"){
                    document.getElementById("pideNum2").style.display = "none";
                }else{
                    document.getElementById("pideNum2").style.display = "block";
                }
            }
        </script>
    </head>
    <body>
        <form method="post" action="handle.php">
            <input type="radio" name="operacion" value="suma" id="suma" onclick="toggle(this)" checked><label for="suma">SUMAR</label><br>
            <input type="radio" name="operacion" value="resta" id="resta" onclick="toggle(this)"><label for="resta">RESTAR</label><br>
            <input type="radio" name="operacion" value="multiplicacion" id="multiplicacion" onclick="toggle(this)"><label for="multiplicacion">MULTIPLICAR</label><br>
            <input type="radio" name="operacion" value="division" id="division" onclick="toggle(this)"><label for="division">DIVIDIR</label><br>
            <input type="radio" name="operacion" value="raizCuadrada" id="raizCuadrada" onclick="toggle(this)"><label for="raizCuadrada">RAIZ CUADRADA</label><br>
            <input type="radio" name="operacion" value="seno" id="seno" onclick="toggle(this)"><label for="seno">SENO</label><br>
            <input type="radio" name="operacion" value="coseno" id="coseno" onclick="toggle(this)"><label for="coseno">COSENO</label><br>
            <input type="radio" name="operacion" value="tangente" id="tangente" onclick="toggle(this)"><label for="tangente">TANGENTE</label><br>
            <div id="pideNum1">
                <label for="num1">Numero 1: </label><br>
                <input type="text" name="num1" id="num1"><br>
            </div>
            <div id="pideNum2">
                <label for="num2">Numero 2: </label><br>
                <input type="text" name="num2" id="num2"><br>
            </div>
            <input type="submit" name="enviar" id="enviar" value="Realizar operacion">
        </form>
    </body>
</html>