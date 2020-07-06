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
        $error = false;
        $mensaje_error = "";
        if (isset($_REQUEST['enviar'])) { //Se ha enviado el formulario
            if (!is_numeric($_REQUEST['monto-convertir']) || $_REQUEST['monto-convertir'] < 0) {
                $error = true;
                $mensaje_error = "Debe introducir una cantidad correcta";
            }
        }
        if (isset($_REQUEST['enviar']) && $error == false) { //Se ha enviado el formulario
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
                    <input type="text" name="monto-convertir" id="monto-convertir" <?php 
                        if(isset($_REQUEST['enviar'])) {
                            echo "value ='".$_REQUEST['monto-convertir']."'";
                            //echo "value="$_REQUEST['monto-convertir']"";
                        }
                    ?> >
                    <label for="tipo-moneda">Convertir a</label>
                    <select name="tipo-moneda" id="tipo-moneda">
                        <option value="dólares">Dólares USA</option>
                        <option value="libras">Libras esterlinas</option>
                        <option value="yenes">Yenes japoneses</option>
                        <option value="francos">Francos suizos</option>
                    </select>
                </div>
                <?php echo "<p>".$mensaje_error."</p>" ?>
                <button type="submit" name="enviar">Convertir</button>
            </form>
    <?php
        }
    ?>
</body>
</html>