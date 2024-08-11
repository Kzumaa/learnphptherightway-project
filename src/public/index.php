<?php

// require_once '../PaymentGateway/Paddle/Transaction.php';
// require_once '../PaymentGateway/Stripe/Transaction.php';

// spl_autoload_register(
//     function($path){
//         $path = __DIR__  . '/../' . lcfirst(str_replace('\\','/',$path)) . '.php';
//         if (file_exists(require $path)){
//             require $path;
//         }
//     }
// );

use App\PaymentGateway\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php';

$transaciton = new Transaction(20, 'Transaction 1');

var_dump($transaciton::getCount());
