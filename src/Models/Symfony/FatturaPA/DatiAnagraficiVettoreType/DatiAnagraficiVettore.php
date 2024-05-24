<?php 

namespace Invoiceninja\Einvoice\Models\Symfony\FatturaPA\DatiAnagraficiVettoreType;

use DateTime;
use DateTimeInterface;
use Invoiceninja\Einvoice\Models\Normalizers\DecimalPrecision;
use Invoiceninja\Einvoice\Models\Symfony\FatturaPA\AnagraficaType\Anagrafica;
use Invoiceninja\Einvoice\Models\Symfony\FatturaPA\IdFiscaleType\IdFiscaleIVA;
use Symfony\Component\Serializer\Attribute\Context;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Valid;

class DatiAnagraficiVettore
{
	#[NotNull]
	#[NotBlank]
	#[Valid]
	public IdFiscaleIVA $IdFiscaleIVA;

	#[Length(min: 11, max: 16)]
	#[Regex('/[A-Z0-9]{11,16}/')]
	public string $CodiceFiscale;

	#[NotNull]
	#[NotBlank]
	#[Valid]
	public Anagrafica $Anagrafica;

	#[Length(min: 1, max: 20)]
	#[Regex('/[\x{0020}-\x{007E}]{1,20}/u')]
	public string $NumeroLicenzaGuida;
}
