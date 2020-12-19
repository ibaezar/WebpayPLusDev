<?php
    require_once './vendor/autoload.php';

    use Transbank\Webpay\Webpay;
    use Transbank\Webpay\Configuration;

    $transaction = (new Webpay(Configuration::forTestingWebpayPLusNormal()))
                    ->getNormalTransaction();

    $tokenWs = filter_input(INPUT_POST, 'token_ws');
    $result = $transaction->getTransactionResult($tokenWs);
    $output = $result->detailOutput;

    if($output->responseCode == 0) {
        echo '<script>window.localStorage.clear();</script>';
        echo '<script>window.localStorage.setItem("authorizationCode", '. $output->authorizationCode .')</script>';
        echo '<script>window.localStorage.setItem("amount", '. $output->amount .')</script>';
        echo '<script>window.localStorage.setItem("responseCode", '. $output->responseCode .')</script>';
    }
?>

<?php if($output->responseCode != 0) : ?>
    <script>
        alert("Error en la transaccion");
        window.location.replace("http://localhost:80/php/webpayPlus/index.php");
    </script>
<?php else : ?>
    <form action="<?php echo $result->urlRedirection ?>" method="POST" id="return-form">
        <input type="hidden" name="token_ws" value="<?php echo $tokenWs ?>">
    </form>

    <script>
        document.getElementById('return-form').submit();
    </script>
<?php endif; ?>