<?php
    require_once './vendor/autoload.php';

    use Transbank\Webpay\Webpay;
    use Transbank\Webpay\Configuration;

    $transaction = (new Webpay(Configuration::forTestingWebpayPLusNormal()))
                    ->getNormalTransaction();

    $amount = 10000;
    $sessionId = 'sessionID';
    $buyOrder = strval(rand(1000,9999999));
    $returnUrl = 'http://localhost:80/php/webpayPlus/return.php';
    $finalUrl = 'http://localhost:80/php/webpayPlus/final.php';

    $initResult = $transaction->initTransaction(
        $amount, $buyOrder, $sessionId, $returnUrl, $finalUrl
    );

    $formAction = $initResult->url;
    $tokenWs = $initResult->token;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles.css">
    <title>Pago Webpay</title>
</head>
<body>
    <div class="container">
        <h2>Pago con Webpay</h2>
        <p>Precio: $<?php echo $amount ?></p>
        <p>Orden de compra: <?php echo $buyOrder ?></p>

        <form action="<?php echo $formAction ?>" method="POST">
            <input type="hidden" name="token_ws" value="<?php echo $tokenWs ?>">
            <button type="submit">Pagar</button>
        </form>
    </div>
</body>
</html>