<?php 

namespace Invoiceninja\Einvoice\Models\FACT1\CommodityClassificationType;

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

class SupportedCommodityClassification
{
	/** @var string */
	#[SerializedName('cbc:NatureCode')]
	public string $NatureCode;

	/** @var string */
	#[SerializedName('cbc:CargoTypeCode')]
	public string $CargoTypeCode;

	/** @var string */
	#[SerializedName('cbc:CommodityCode')]
	public string $CommodityCode;

	/** @var string */
	#[SerializedName('cbc:ItemClassificationCode')]
	public string $ItemClassificationCode;
}
