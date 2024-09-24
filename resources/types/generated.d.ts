declare namespace App.Data {
export type BasketData = {
id: number | null;
customerId: number | null;
companyId: number | null;
statusId: number | null;
currencyId: number | null;
currencyCode: string | null;
referId: number | null;
referUrl: string | null;
validTo: string | null;
isEditable: boolean | null;
items: Array<App.Data.BasketItemData>;
info: Array<any> | null;
summary: App.Data.BasketSummaryData;
typeId: number | null;
doHold: boolean | null;
isBuyable: boolean | null;
salesAreaId: number | null;
};
export type BasketItemData = {
id: number | null;
lineNo: number | null;
parentLineNo: string | null;
productId: number | null;
partNo: string;
manufacturerPartNo: string | null;
name: string | null;
priceDisplay: number | null;
vatRate: number | null;
quantity: number;
uom: string | null;
uomCount: number | null;
info: Array<any> | null;
imageKey: string | null;
image: string | null;
categoryId: number | null;
uniqueName: string | null;
isBuyable: string | null;
categoryIdSeed: string | null;
eanCode: string | null;
priceDisplayIncVat: number | null;
};
export type BasketSummaryData = {
items: App.Data.BasketSummaryItemData;
freight: App.Data.BasketSummaryItemData;
fees: App.Data.BasketSummaryItemData;
total: App.Data.BasketSummaryItemData;
};
export type BasketSummaryItemData = {
amount: number;
vat: number;
amountIncVat: number;
};
}
