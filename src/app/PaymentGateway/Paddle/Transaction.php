<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

use App\Enums\Status;

class Transaction 
{
    private float $amount;

    public function __construct(
        float $amount,
    ) {
        $this->amount = $amount;
    }

    public function progress () 
    {
        echo 'Processing paddle transaction...';
    }

}