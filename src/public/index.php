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

require __DIR__ . '/../vendor/autoload.php';

// spl_autoload_register(
//     function ($class) {
//         var_dump($class);
//     }
// , true);

use App\PaymentGateway\Paddle\Transaction;

$paddleTransaction = new Transaction();

$id = new \Ramsey\Uuid\UuidFactory();

echo $id->uuid4();

var_dump($paddleTransaction);

// And some Destruct method's usecase