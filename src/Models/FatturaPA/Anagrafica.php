<?php 

namespace Invoiceninja\Einvoice\Models\FatturaPA;

use Carbon\Carbon;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class Anagrafica extends Data
{
	#[Required]
	public ?string $Denominazione;

	#[Required]
	public ?string $Nome;

	#[Required]
	public ?string $Cognome;
	public string|Optional $Titolo;
	public string|Optional $CodEORI;
}
