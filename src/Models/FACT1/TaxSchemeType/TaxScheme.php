<?php 

namespace Invoiceninja\Einvoice\Models\FACT1\TaxSchemeType;

use DateTime;
use DateTimeInterface;
use Invoiceninja\Einvoice\Models\FACT1\AddressType\JurisdictionRegionAddress;
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

class TaxScheme
{
	/** @var string */
	#[SerializedName('cbc:ID')]
	public string $ID;

	/** @var string */
	#[SerializedName('cbc:Name')]
	public string $Name;

	/** @var string */
	#[SerializedName('cbc:TaxTypeCode')]
	public string $TaxTypeCode;

	/** @var string */
	#[SerializedName('cbc:CurrencyCode')]
	public string $CurrencyCode;

	/** @var JurisdictionRegionAddress[] */
	#[SerializedName('cac:JurisdictionRegionAddress')]
	public array $JurisdictionRegionAddress = [];
}