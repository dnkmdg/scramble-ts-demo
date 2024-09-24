<?php

namespace App\Data;

use Spatie\LaravelData\Data;

/**
 * @property BasketItemData[] $items
 */
class BasketData extends Data
{
    public function __construct(
        public ?int $id,
        public ?int $customerId,
        public ?int $companyId,
        public ?int $statusId,
        public ?int $currencyId,
        public ?string $currencyCode,
        public ?int $referId,
        public ?string $referUrl,
        public ?string $validTo,
        public ?bool $isEditable,
        public array $items,
        public ?array $info,
        public BasketSummaryData $summary,
        public ?int $typeId,
        public ?bool $doHold,
        public ?bool $isBuyable,
        public ?int $salesAreaId,
    ) {

        // $this->summary = BasketSummaryData::from($this->summary)->toArray();
    }

    public static function fromNorce(array $data): self
    {
        return new self(
            id: $data['Id'],
            customerId: $data['CustomerId'],
            companyId: $data['CompanyId'],
            statusId: $data['StatusId'],
            currencyId: $data['CurrencyId'],
            currencyCode: $data['CurrencyCode'],
            referId: $data['ReferId'],
            referUrl: $data['ReferUrl'],
            validTo: $data['ValidTo'],
            isEditable: $data['IsEditable'],
            items: BasketItemData::collect($data['Items'] ?? []),
            info: $data['Info'],
            summary: BasketSummaryData::fromNorce($data['Summary']),
            typeId: $data['TypeId'],
            doHold: $data['DoHold'],
            isBuyable: $data['IsBuyable'],
            salesAreaId: $data['SalesAreaId'],
        );
    }
}
