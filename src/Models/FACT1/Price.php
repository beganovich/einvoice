<?php 

namespace Invoiceninja\Einvoice\Models\FACT1;

use Carbon\Carbon;
use Invoiceninja\Einvoice\Models\FACT1\AllowanceChargeType\AllowanceCharge;
use Invoiceninja\Einvoice\Models\FACT1\ExchangeRateType\PricingExchangeRate;
use Invoiceninja\Einvoice\Models\FACT1\PeriodType\ValidityPeriod;
use Invoiceninja\Einvoice\Models\FACT1\PriceListType\PriceList;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class Price extends Data
{
	#[Required]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float $PriceAmount;

	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $BaseQuantity;

	#[DataCollectionOf('PriceChangeReason')]
	public string|Optional $PriceChangeReason;
	public string|Optional $PriceTypeCode;
	public string|Optional $PriceType;
	public string|Optional $OrderableUnitFactorRate;

	#[DataCollectionOf('ValidityPeriod')]
	public ValidityPeriod|Optional $ValidityPeriod;
	public PriceList|Optional $PriceList;

	#[DataCollectionOf('AllowanceCharge')]
	public AllowanceCharge|Optional $AllowanceCharge;
	public PricingExchangeRate|Optional $PricingExchangeRate;
}
