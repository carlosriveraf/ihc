<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de euros a pesetas. Resultados del formulario</title>
</head>
<body>
    <h1>Conversor de euros a pesetas</h1>
    <?php
        $monto = $_POST["monto-convertir"];
        if ($monto != "") {
            $equivalente = $monto * 166.386;
            echo $monto." euros equivalen a ".$equivalente." pesetas";
        } else {
            echo "Debe introducir una cantidad";
        }
    ?>
    <br><br>
    <a href="index.php">Volver</a>    
</body>
</html>