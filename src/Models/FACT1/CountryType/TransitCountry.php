<?php 

namespace Invoiceninja\Einvoice\Models\FACT1\CountryType;

use Carbon\Carbon;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class TransitCountry extends Data
{
	public string|Optional $IdentificationCode;
	public string|Optional $Name;
}