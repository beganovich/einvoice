<?php 

namespace Invoiceninja\Einvoice\Models\FACT1\PickupType;

use DateTime;
use DateTimeInterface;
use Invoiceninja\Einvoice\Models\FACT1\LocationType\PickupLocation;
use Invoiceninja\Einvoice\Models\FACT1\PartyType\PickupParty;
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

class Pickup
{
	/** @var string */
	#[SerializedName('cbc:ID')]
	public string $ID;

	/** @var DateTime */
	#[Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d'])]
	#[SerializedName('cbc:ActualPickupDate')]
	public DateTime $ActualPickupDate;

	/** @var DateTime */
	#[Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d\TH:i:s.uP'])]
	#[SerializedName('cbc:ActualPickupTime')]
	public DateTime $ActualPickupTime;

	/** @var DateTime */
	#[Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d'])]
	#[SerializedName('cbc:EarliestPickupDate')]
	public DateTime $EarliestPickupDate;

	/** @var DateTime */
	#[Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d\TH:i:s.uP'])]
	#[SerializedName('cbc:EarliestPickupTime')]
	public DateTime $EarliestPickupTime;

	/** @var DateTime */
	#[Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d'])]
	#[SerializedName('cbc:LatestPickupDate')]
	public DateTime $LatestPickupDate;

	/** @var DateTime */
	#[Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d\TH:i:s.uP'])]
	#[SerializedName('cbc:LatestPickupTime')]
	public DateTime $LatestPickupTime;

	/** @var PickupLocation */
	#[SerializedName('cac:PickupLocation')]
	public $PickupLocation;

	/** @var PickupParty */
	#[SerializedName('cac:PickupParty')]
	public $PickupParty;
}
