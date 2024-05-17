<?php 

namespace Invoiceninja\Einvoice\Models\FatturaPA\DatiDocumentiCorrelatiType;

use Carbon\Carbon;
use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\Attributes\Validation\Min;
use Spatie\LaravelData\Attributes\Validation\Regex;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Transformers\DateTimeInterfaceTransformer;

class DatiFattureCollegate extends Data
{
	public int|Optional $RiferimentoNumeroLinea;

	#[Max(20)]
	#[Min(1)]
	#[Regex('(\p{IsBasicLatin}{1,20})')]
	public string $IdDocumento;

	#[WithTransformer('Spatie\LaravelData\Transformers\DateTimeInterfaceTransformer', format: 'Y-m-d')]
	public Carbon|Optional $Data;

	#[Max(20)]
	#[Min(1)]
	#[Regex('(\p{IsBasicLatin}{1,20})')]
	public string|Optional $NumItem;

	#[Max(100)]
	#[Min(1)]
	#[Regex('[\p{IsBasicLatin}\p{IsLatin-1Supplement}]{1,100}')]
	public string|Optional $CodiceCommessaConvenzione;

	#[Max(15)]
	#[Min(1)]
	#[Regex('(\p{IsBasicLatin}{1,15})')]
	public string|Optional $CodiceCUP;

	#[Max(15)]
	#[Min(1)]
	#[Regex('(\p{IsBasicLatin}{1,15})')]
	public string|Optional $CodiceCIG;
}