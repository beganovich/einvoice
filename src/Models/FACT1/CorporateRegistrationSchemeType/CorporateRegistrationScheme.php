<?php 

namespace Invoiceninja\Einvoice\Models\FACT1\CorporateRegistrationSchemeType;

use Carbon\Carbon;
use Invoiceninja\Einvoice\Models\FACT1\AddressType\JurisdictionRegionAddress;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class CorporateRegistrationScheme extends Data
{
	public string|Optional $ID;
	public string|Optional $Name;
	public string|Optional $CorporateRegistrationTypeCode;
	public JurisdictionRegionAddress|Optional $JurisdictionRegionAddress;
}