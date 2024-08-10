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

use App\Enums\Status;
use App\PaymentGateway\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php';

// spl_autoload_register(
//     function ($class) {
//         var_dump($class);
//     }
// , true);

$transaction = new Transaction();

$transaction->setStatus(Status::PAID);

var_dump($transaction);

// And some Destruct method's usecase