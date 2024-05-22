<?php 

namespace Invoiceninja\Einvoice\Models\Symfony\FatturaPA\DatiAnagraficiRappresentanteType;

use Carbon\Carbon;
use Invoiceninja\Einvoice\Models\Symfony\FatturaPA\AnagraficaType\Anagrafica;
use Invoiceninja\Einvoice\Models\Symfony\FatturaPA\IdFiscaleType\IdFiscaleIVA;

class DatiAnagrafici
{
	#[\Symfony\Component\Validator\Constraints\NotNull]
	#[\Symfony\Component\Validator\Constraints\NotBlank]
	public IdFiscaleIVA $IdFiscaleIVA;

	#[\Symfony\Component\Validator\Constraints\Length(max: 16)]
	#[\Symfony\Component\Validator\Constraints\Length(min: 11)]
	#[\Symfony\Component\Validator\Constraints\Regex('/[A-Z0-9]{11,16}/')]
	public string $CodiceFiscale;

	#[\Symfony\Component\Validator\Constraints\NotNull]
	#[\Symfony\Component\Validator\Constraints\NotBlank]
	public Anagrafica $Anagrafica;
}