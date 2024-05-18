<?php 

namespace Invoiceninja\Einvoice\Models\FACT1\PeriodType;

use Carbon\Carbon;
use Invoiceninja\Einvoice\Models\Transformers\FloatTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Transformers\DateTimeInterfaceTransformer;

class InvoicePeriod extends Data
{
	#[WithTransformer('Spatie\LaravelData\Transformers\DateTimeInterfaceTransformer', format: 'Y-m-d')]
	public Carbon|Optional $StartDate;
	public \time|Optional $StartTime;

	#[WithTransformer('Spatie\LaravelData\Transformers\DateTimeInterfaceTransformer', format: 'Y-m-d')]
	public Carbon|Optional $EndDate;
	public \time|Optional $EndTime;

	#[WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $DurationMeasure;
	public string|Optional $DescriptionCode;
	private array $DescriptionCode_array = [3 => 'Invoice Date', 35 => 'Delivery Date', 432 => 'Payment Date'];
	public string|Optional $Description;
}
