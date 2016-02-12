<?php

require_once 'vendor/autoload.php';

if (isset($_GET['change'])) {

  $num = htmlspecialchars($_POST['num'], ENT_QUOTES, 'UTF-8');
  $numTo = htmlspecialchars($_POST['numTo'], ENT_QUOTES, 'UTF-8');
  $toNum = htmlspecialchars($_POST['toNum'], ENT_QUOTES, 'UTF-8');
  $errores = [];

  if(!is_numeric($num)){
    $errores = true;
  }

  if(empty($errores)){

    $provider = new \Thelia\CurrencyConverter\Provider\ECBProvider();

    $currencyConverty = new \Thelia\CurrencyConverter\CurrencyConverter($provider);

    $baseValue = new \Thelia\Math\Number($num);

    $convertedValue = $currencyConverter
      ->from($numTo)
      ->to($toNum)
      ->convert($baseValue);

    echo $convertedValue->getNumber();

  }else{
    require_once 'index.html.php';
  }

}

require_once 'index.html.php';
