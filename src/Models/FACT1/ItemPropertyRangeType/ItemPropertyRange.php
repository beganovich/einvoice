<?php 

namespace Invoiceninja\Einvoice\Models\FACT1\ItemPropertyRangeType;

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

class ItemPropertyRange
{
	/** @var string */
	#[SerializedName('cbc:MinimumValue')]
	public string $MinimumValue;

	/** @var string */
	#[SerializedName('cbc:MaximumValue')]
	public string $MaximumValue;
}
