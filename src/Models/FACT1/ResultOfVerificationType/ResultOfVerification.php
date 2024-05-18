<?php 

namespace Invoiceninja\Einvoice\Models\FACT1\ResultOfVerificationType;

use Carbon\Carbon;
use Invoiceninja\Einvoice\Models\FACT1\PartyType\SignatoryParty;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Transformers\DateTimeInterfaceTransformer;

class ResultOfVerification extends Data
{
	public string|Optional $ValidatorID;
	public string|Optional $ValidationResultCode;

	#[WithTransformer('Spatie\LaravelData\Transformers\DateTimeInterfaceTransformer', format: 'Y-m-d')]
	public Carbon|Optional $ValidationDate;
	public \time|Optional $ValidationTime;
	public string|Optional $ValidateProcess;
	public string|Optional $ValidateTool;
	public string|Optional $ValidateToolVersion;
	public SignatoryParty|Optional $SignatoryParty;
}