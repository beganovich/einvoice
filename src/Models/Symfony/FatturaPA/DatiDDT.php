<?php 

namespace Invoiceninja\Einvoice\Models\Symfony\FatturaPA;

use Symfony\Component\Serializer\Attribute\Context;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Valid;

class DatiDDT
{
	#[Length(min: 1, max: 20)]
	#[Regex('/[\x{0020}-\x{007E}]{1,20}/u')]
	public string $NumeroDDT;

	#[NotNull]
	#[NotBlank]
	#[Valid]
	#[Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d'])]
	public \DateTime $DataDDT;

	/** @param RiferimentoNumeroLinea[] $RiferimentoNumeroLinea */
	public int $RiferimentoNumeroLinea;
}
