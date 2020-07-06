<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de euros a pesetas</title>
</head>
<body>
    <h1>Conversor de euros a pesetas</h1>
    <form action="resultado.php" method="POST">
        <div>
            <label for="monto-convertir">Cantidad en euros:</label>
            <input type="number" name="monto-convertir" id="monto-convertir" step="0.01" min="0">
        </div>
        <button type="submit">Convertir</button>
    </form>
</body>
</html>