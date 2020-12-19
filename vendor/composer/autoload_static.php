<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit065e6782473632be587690750843a300
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        '25072dd6e2470089de65ae7bf11d3109' => __DIR__ . '/..' . '/symfony/polyfill-php72/bootstrap.php',
        '023d27dca8066ef29e6739335ea73bad' => __DIR__ . '/..' . '/symfony/polyfill-php70/bootstrap.php',
        'e69f7f6ee287b969198c3c9d6777bd38' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/bootstrap.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        'f598d06aa772fa33d905e87be6398fb1' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/bootstrap.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        'fe96d013bc66df5d09201e9f0efbf9cd' => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/webpay_rest/oneclick/Oneclick.php',
        '401ad047fc054fd3d35500955704975e' => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/patpass/patpass_comercio/PatpassComercio.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Transbank\\Webpay\\WebpayPlus\\Exceptions\\' => 39,
            'Transbank\\Webpay\\WebpayPlus\\' => 28,
            'Transbank\\Webpay\\Oneclick\\Exceptions\\' => 37,
            'Transbank\\Webpay\\Oneclick\\' => 26,
            'Transbank\\Webpay\\Exceptions\\' => 28,
            'Transbank\\Webpay\\' => 17,
            'Transbank\\Utils\\' => 16,
            'Transbank\\TransaccionCompleta\\Exceptions\\' => 41,
            'Transbank\\TransaccionCompleta\\' => 30,
            'Transbank\\Patpass\\PatpassComercio\\Exceptions\\' => 45,
            'Transbank\\Patpass\\PatpassComercio\\' => 34,
            'Transbank\\Patpass\\PatpassByWebpay\\Exceptions\\' => 45,
            'Transbank\\Patpass\\PatpassByWebpay\\' => 34,
            'Transbank\\Patpass\\Exceptions\\' => 29,
            'Transbank\\Patpass\\' => 18,
            'Transbank\\Onepay\\Exceptions\\' => 28,
            'Transbank\\Onepay\\' => 17,
            'Transbank\\' => 10,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php72\\' => 23,
            'Symfony\\Polyfill\\Php70\\' => 23,
            'Symfony\\Polyfill\\Intl\\Normalizer\\' => 33,
            'Symfony\\Polyfill\\Intl\\Idn\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Transbank\\Webpay\\WebpayPlus\\Exceptions\\' => 
        array (
            0 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/webpay_rest/webpay_plus/exceptions',
        ),
        'Transbank\\Webpay\\WebpayPlus\\' => 
        array (
            0 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/webpay_rest/webpay_plus',
        ),
        'Transbank\\Webpay\\Oneclick\\Exceptions\\' => 
        array (
            0 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/webpay_rest/oneclick/exceptions',
            1 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/webpay_rest/oneclick/mall/exceptions',
        ),
        'Transbank\\Webpay\\Oneclick\\' => 
        array (
            0 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/webpay_rest/oneclick',
            1 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/webpay_rest/oneclick/inscription',
            2 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/webpay_rest/oneclick/mall',
        ),
        'Transbank\\Webpay\\Exceptions\\' => 
        array (
            0 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/webpay_rest/exceptions',
        ),
        'Transbank\\Webpay\\' => 
        array (
            0 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/webpay',
            1 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/webpay/soap',
            2 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/webpay_rest',
            3 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/webpay_rest/webpay_plus',
        ),
        'Transbank\\Utils\\' => 
        array (
            0 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/utils',
        ),
        'Transbank\\TransaccionCompleta\\Exceptions\\' => 
        array (
            0 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/transaccion_completa/exceptions',
            1 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/transaccion_completa/mall/exceptions',
        ),
        'Transbank\\TransaccionCompleta\\' => 
        array (
            0 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/transaccion_completa',
            1 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/transaccion_completa/inscription',
            2 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/transaccion_completa/transaction',
            3 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/transaccion_completa/mall',
            4 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/transaccion_completa/mall/transaction',
        ),
        'Transbank\\Patpass\\PatpassComercio\\Exceptions\\' => 
        array (
            0 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/patpass/patpass_comercio/exceptions',
        ),
        'Transbank\\Patpass\\PatpassComercio\\' => 
        array (
            0 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/patpass/patpass_comercio',
            1 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/patpass/patpass_comercio/inscription',
        ),
        'Transbank\\Patpass\\PatpassByWebpay\\Exceptions\\' => 
        array (
            0 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/patpass/patpass_by_webpay/exceptions',
        ),
        'Transbank\\Patpass\\PatpassByWebpay\\' => 
        array (
            0 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/patpass/patpass_by_webpay',
        ),
        'Transbank\\Patpass\\Exceptions\\' => 
        array (
            0 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/patpass/exceptions',
        ),
        'Transbank\\Patpass\\' => 
        array (
            0 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/patpass',
            1 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/patpass/patpass_by_webpay',
            2 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/patpass/patpass_comercio',
        ),
        'Transbank\\Onepay\\Exceptions\\' => 
        array (
            0 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/onepay/exceptions',
        ),
        'Transbank\\Onepay\\' => 
        array (
            0 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/onepay',
            1 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/onepay/utils',
        ),
        'Transbank\\' => 
        array (
            0 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib',
        ),
        'Symfony\\Polyfill\\Php72\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php72',
        ),
        'Symfony\\Polyfill\\Php70\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php70',
        ),
        'Symfony\\Polyfill\\Intl\\Normalizer\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer',
        ),
        'Symfony\\Polyfill\\Intl\\Idn\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-idn',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $classMap = array (
        'ArithmeticError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/ArithmeticError.php',
        'AssertionError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/AssertionError.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DivisionByZeroError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/DivisionByZeroError.php',
        'Error' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/Error.php',
        'Normalizer' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/Resources/stubs/Normalizer.php',
        'ParseError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/ParseError.php',
        'SessionUpdateTimestampHandlerInterface' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/SessionUpdateTimestampHandlerInterface.php',
        'TypeError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/TypeError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit065e6782473632be587690750843a300::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit065e6782473632be587690750843a300::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit065e6782473632be587690750843a300::$classMap;

        }, null, ClassLoader::class);
    }
}
