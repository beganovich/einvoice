<?php 

namespace Invoiceninja\Einvoice\Models\FACT1\TaxTotalType;

use Carbon\Carbon;
use Invoiceninja\Einvoice\Models\FACT1\TaxSubtotalType\TaxSubtotal;
use Invoiceninja\Einvoice\Models\Transformers\FloatTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class TaxTotal extends Data
{
	#[WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public ?float $TaxAmount;

	#[WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $RoundingAmount;
	public \boolean|Optional $TaxEvidenceIndicator;
	public \boolean|Optional $TaxIncludedIndicator;
	public TaxSubtotal|Optional $TaxSubtotal;
}
