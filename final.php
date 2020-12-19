<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles.css">
    <title>Resumen de compra</title>
</head>
<body>
    <div class="container">
        <h2>Compra exitosa</h2>
        <p>Monto: <span id="amount"></span></p>
        <p>Código de autorización:  <span id="authorizationCode"></span></p>
        <p>Código de respuesta: <span id="responseCode"></span></p>
        <a href="http://localhost:80/php/webpayPlus/index.php">Volver al Inicio</a>
    </div>

    <script>
        document.getElementById('amount').innerHTML = window.localStorage.getItem('amount');
        document.getElementById('authorizationCode').innerHTML = window.localStorage.getItem('authorizationCode');
        document.getElementById('responseCode').innerHTML = window.localStorage.getItem('responseCode');
    </script>
</body>
</html>