<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class BasketItemData extends Data
{
    public function __construct(
        public ?int $id,
        public ?int $lineNo,
        public ?string $parentLineNo,
        public ?int $productId,
        public string $partNo,
        public ?string $manufacturerPartNo,
        public ?string $name,
        public ?float $priceDisplay,
        public ?float $vatRate,
        public int $quantity,
        public ?string $uom,
        public ?int $uomCount,
        public ?array $info,
        public ?string $imageKey,
        public ?string $image,
        public ?int $categoryId,
        public ?string $uniqueName,
        public ?string $isBuyable,
        public ?string $categoryIdSeed,
        public ?string $eanCode,
        public ?float $priceDisplayIncVat,
    ) {
        $this->image = config('norce.cdn_uri').$this->imageKey;
    }

    public static function fromNorce(array $data): self
    {
        return new self(
            id: $data['Id'],
            lineNo: $data['LineNo'],
            parentLineNo: $data['ParentLineNo'],
            productId: $data['ProductId'],
            partNo: $data['PartNo'],
            manufacturerPartNo: $data['ManufacturerPartNo'],
            name: $data['Name'],
            priceDisplay: $data['PriceDisplay'],
            vatRate: $data['VatRate'],
            quantity: $data['Quantity'],
            uom: $data['Uom'] ?? null,
            uomCount: $data['UomCount'] ?? null,
            info: $data['Info'],
            imageKey: $data['ImageKey'],
            image: $data['Image'] ?? '',
            categoryId: $data['CategoryId'],
            uniqueName: $data['UniqueName'],
            isBuyable: $data['IsBuyable'],
            categoryIdSeed: $data['CategoryIdSeed'],
            eanCode: $data['EanCode'],
            priceDisplayIncVat: $data['PriceDisplayIncVat'],
        );
    }

    public function reverse()
    {
        return [
            'Id' => $this->id,
            'LineNo' => $this->lineNo,
            'ParentLineNo' => $this->parentLineNo,
            'ProductId' => $this->productId,
            'PartNo' => $this->partNo,
            'ManufacturerPartNo' => $this->manufacturerPartNo,
            'Name' => $this->name,
            'Quantity' => $this->quantity,
            'UniqueName' => $this->uniqueName,
        ];
    }
}
