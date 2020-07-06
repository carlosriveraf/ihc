<!DOCTYPE html>
<html lang="es">
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
            $tabla_conversion = array(
                'dólares' => 1.35900,
                'libras' => 0.90831,
                'yenes' => 122.042,
                'francos' => 1.46279,
            );
            $tipo_moneda = $_POST["tipo-moneda"];
            $equivalente = $monto * $tabla_conversion["$tipo_moneda"];
            echo $monto." euros equivalen a ".$equivalente." ".$tipo_moneda;            
        } else {
            echo "Debe introducir una cantidad";
        }
    ?>
    <br><br>
    <a href="index.php">Volver</a>    
</body>
</html>