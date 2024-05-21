<?php 

namespace Invoiceninja\Einvoice\Models\FACT1;

use Carbon\Carbon;
use Invoiceninja\Einvoice\Models\FACT1\AddressType\ApplicableTerritoryAddress;
use Invoiceninja\Einvoice\Models\FACT1\AllowanceChargeType\AllowanceCharge;
use Invoiceninja\Einvoice\Models\FACT1\DeliveryUnitType\DeliveryUnit;
use Invoiceninja\Einvoice\Models\FACT1\DependentPriceReferenceType\DependentPriceReference;
use Invoiceninja\Einvoice\Models\FACT1\PackageType\Package;
use Invoiceninja\Einvoice\Models\FACT1\PriceType\Price;
use Invoiceninja\Einvoice\Models\FACT1\TaxCategoryType\ApplicableTaxCategory;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class ItemLocationQuantity extends Data
{
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $LeadTimeMeasure;

	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $MinimumQuantity;

	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $MaximumQuantity;
	public bool|Optional $HazardousRiskIndicator;

	#[DataCollectionOf('TradingRestrictions')]
	public string|Optional $TradingRestrictions;

	#[DataCollectionOf('ApplicableTerritoryAddress')]
	public ApplicableTerritoryAddress|Optional $ApplicableTerritoryAddress;
	public Price|Optional $Price;

	#[DataCollectionOf('DeliveryUnit')]
	public DeliveryUnit|Optional $DeliveryUnit;

	#[DataCollectionOf('ApplicableTaxCategory')]
	public ApplicableTaxCategory|Optional $ApplicableTaxCategory;
	public Package|Optional $Package;

	#[DataCollectionOf('AllowanceCharge')]
	public AllowanceCharge|Optional $AllowanceCharge;
	public DependentPriceReference|Optional $DependentPriceReference;
}
