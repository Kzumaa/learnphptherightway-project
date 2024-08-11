<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

use App\Enums\Status;

class Transaction 
{

    private static int $count = 0;


    public function __construct(
        public float $amount,
        public string $description
    ) {
    self::$count++;   
    }

    public function progress () 
    {
        echo 'Processing paddle transaction...';
    }

    public static function getCount () : int
    {
        return self::$count;
    }
}