<?php

namespace App\Data;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;

class BasketSummaryItemData extends Data
{
    public function __construct(
        #[MapInputName('Amount')]
        public float $amount,
        #[MapInputName('Vat')]
        public float $vat,
        #[MapInputName('AmountIncVat')]
        public float $amountIncVat,
    ) {}
}
