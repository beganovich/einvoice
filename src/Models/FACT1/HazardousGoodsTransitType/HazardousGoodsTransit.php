<?php 

namespace Invoiceninja\Einvoice\Models\FACT1\HazardousGoodsTransitType;

use DateTime;
use DateTimeInterface;
use Invoiceninja\Einvoice\Models\FACT1\TemperatureType\MaximumTemperature;
use Invoiceninja\Einvoice\Models\FACT1\TemperatureType\MinimumTemperature;
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

class HazardousGoodsTransit
{
	/** @var string */
	#[SerializedName('cbc:TransportEmergencyCardCode')]
	public string $TransportEmergencyCardCode;

	/** @var string */
	#[SerializedName('cbc:PackingCriteriaCode')]
	public string $PackingCriteriaCode;

	/** @var string */
	#[SerializedName('cbc:HazardousRegulationCode')]
	public string $HazardousRegulationCode;

	/** @var string */
	#[SerializedName('cbc:InhalationToxicityZoneCode')]
	public string $InhalationToxicityZoneCode;

	/** @var string */
	#[SerializedName('cbc:TransportAuthorizationCode')]
	public string $TransportAuthorizationCode;

	/** @var MaximumTemperature */
	#[SerializedName('cac:MaximumTemperature')]
	public $MaximumTemperature;

	/** @var MinimumTemperature */
	#[SerializedName('cac:MinimumTemperature')]
	public $MinimumTemperature;
}
