<?php 

namespace Invoiceninja\Einvoice\Models\FatturaPA;

use Carbon\Carbon;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class IscrizioneREA extends Data
{
	public ?string $Ufficio;
	public ?string $NumeroREA;

	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $CapitaleSociale;
	private array $SocioUnico_array = ['SU' => 'socio unico', 'SM' => 'più soci'];

	#[\Spatie\LaravelData\Attributes\Validation\In(SU: 'socio unico', SM: 'più soci')]
	public string|Optional $SocioUnico;
	private array $StatoLiquidazione_array = ['LS' => 'in liquidazione', 'LN' => 'non in liquidazione'];

	#[\Spatie\LaravelData\Attributes\Validation\In(LS: 'in liquidazione', LN: 'non in liquidazione')]
	public ?string $StatoLiquidazione;
}
