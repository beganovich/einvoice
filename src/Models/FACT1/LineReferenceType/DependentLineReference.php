<?php 

namespace Invoiceninja\Einvoice\Models\FACT1\LineReferenceType;

use Carbon\Carbon;
use Invoiceninja\Einvoice\Models\FACT1\DocumentReferenceType\DocumentReference;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class DependentLineReference extends Data
{
	public ?string $LineID;
	public string|Optional $UUID;
	public string|Optional $LineStatusCode;
	public DocumentReference|Optional $DocumentReference;
}
