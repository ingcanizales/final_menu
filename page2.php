<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULOS MATEMATICOS</title>
</head>
<body>
    
    <h1>Calculaos matematicos</h1>
    
    <form name="form1" method="POST" action="operaciones.php">
    <p>Ingresar valores para calculos matematicos</p>

        <p>Número 1: <input type="number" id="txtnumero1" name="txtnumero1"></p>
        <p>Número 2: <input type="number" id="txtnumero2" name="txtnumero2"></p>
        <br>
        <input type="submit" name="btncalcular2" value="Calcular">

    </form>

    <form name="form1" method="POST" action="calcular.php">
        
    
        
         
        <p>Ingresa el valor para conocer la serie fibonacci y factorial</p>
        <p><input type="text" name="txtnumero" id="txtnumero"></p>
        <p><input type="submit" name="btncalcular" value="Calcular"></p>
        <br><br><br><button type="button" onclick="location.href='index.php'">Regresar</button>
    </form>

</body>
</html>