
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora</title>
        <link rel="stylesheet" href="css/estilo.css">
      
    </head>

    <body>
        

        <p>Calculadora</p>
        <form method="GET" action="operaciones/calc.php">
		    <input type="text" name="operando1">
            <select name="operador">
                <option value="+">+
                </option>
                <option value="-">-
                </option>
                <option value="*">*
                </option>
                <option value="/">/
                </option>
            </select>
            <input type="text" name="operando2">
            <input type="submit" value="enviar">
        </form>

        <a href="operaciones/vista2.php">ir a la vista 2 para ver las imagenes</a>
    </body>
    
</html>


