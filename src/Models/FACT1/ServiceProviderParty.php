<?php 

namespace Invoiceninja\Einvoice\Models\FACT1;

use Carbon\Carbon;
use Invoiceninja\Einvoice\Models\FACT1\ContactType\SellerContact;
use Invoiceninja\Einvoice\Models\FACT1\PartyType\Party;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class ServiceProviderParty extends Data
{
	public string|Optional $ID;
	public string|Optional $ServiceTypeCode;

	/** @param array<ServiceType> $ServiceType */
	public array|Optional $ServiceType;

	#[Required]
	public ?Party $Party;
	public SellerContact|Optional $SellerContact;
}
