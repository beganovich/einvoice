<?php 

namespace Invoiceninja\Einvoice\Models\Symfony\FatturaPA\IdFiscaleType;

use DateTime;
use DateTimeInterface;
use Invoiceninja\Einvoice\Models\Normalizers\DecimalPrecision;
use Symfony\Component\Serializer\Attribute\Context;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Valid;

class IdTrasmittente
{
	#[Length(min: 2, max: 2)]
	#[Regex('/[A-Z]{2}/')]
	public string $IdPaese;

	#[Length(min: 1, max: 28)]
	public string $IdCodice;
}
