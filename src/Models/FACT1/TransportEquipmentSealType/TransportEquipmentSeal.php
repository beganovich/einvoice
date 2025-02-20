<?php 

namespace Invoiceninja\Einvoice\Models\FACT1\TransportEquipmentSealType;

use DateTime;
use DateTimeInterface;
use Invoiceninja\Einvoice\Models\Normalizers\DecimalPrecision;
use Symfony\Component\Serializer\Attribute\Context;
use Symfony\Component\Serializer\Attribute\SerializedName;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Validator\Constraints\All;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Valid;

class TransportEquipmentSeal
{
	/** @var string */
	#[SerializedName('cbc:ID')]
	public string $ID;

	/** @var string */
	#[SerializedName('cbc:SealIssuerTypeCode')]
	public string $SealIssuerTypeCode;

	/** @var string */
	#[SerializedName('cbc:Condition')]
	public string $Condition;

	/** @var string */
	#[SerializedName('cbc:SealStatusCode')]
	public string $SealStatusCode;

	/** @var string */
	#[SerializedName('cbc:SealingPartyType')]
	public string $SealingPartyType;
}
