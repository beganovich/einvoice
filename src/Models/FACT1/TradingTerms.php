<?php 

namespace Invoiceninja\Einvoice\Models\FACT1;

use Carbon\Carbon;
use Invoiceninja\Einvoice\Models\FACT1\AddressType\ApplicableAddress;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class TradingTerms extends Data
{
	public string|Optional $Information;
	public string|Optional $Reference;
	public ApplicableAddress|Optional $ApplicableAddress;
}