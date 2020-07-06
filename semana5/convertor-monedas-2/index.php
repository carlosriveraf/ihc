<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de euros a pesetas</title>
</head>
<body>
    <h1>Conversor de euros a pesetas</h1>
    <?php
        //var_dump($_REQUEST);
        if (isset($_REQUEST['enviar'])) { //Se ha enviado el formulario            
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
            echo "<br><br>";
            echo '<a href="index.php">Volver</a>';
        } else {
    ?>
            <form action="index.php" method="POST">
                <div>
                    <label for="monto-convertir">Cantidad en euros:</label>
                    <input type="number" name="monto-convertir" id="monto-convertir" step="0.01" min="0">
                    <label for="tipo-moneda">Convertir a</label>
                    <select name="tipo-moneda" id="tipo-moneda">
                        <option value="dólares">Dólares USA</option>
                        <option value="libras">Libras esterlinas</option>
                        <option value="yenes">Yenes japoneses</option>
                        <option value="francos">Francos suizos</option>
                    </select>
                </div>
                <button type="submit" name="enviar">Convertir</button>
            </form>
    <?php
        }
    ?>
</body>
</html>