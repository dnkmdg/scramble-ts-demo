<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class BasketSummaryData extends Data
{
    public function __construct(
        public BasketSummaryItemData $items,
        public BasketSummaryItemData $freight,
        public BasketSummaryItemData $fees,
        public BasketSummaryItemData $total,
    ) {}

    public static function fromNorce(array $data): self
    {
        return new self(
            items: BasketSummaryItemData::from($data['Items'] ?? []),
            freight: BasketSummaryItemData::from($data['Freigt']),
            fees: BasketSummaryItemData::from($data['Fees']),
            total: BasketSummaryItemData::from($data['Total']),
        );
    }
}
