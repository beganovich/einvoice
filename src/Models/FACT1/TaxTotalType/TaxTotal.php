<?php 

namespace Invoiceninja\Einvoice\Models\FACT1\TaxTotalType;

use DateTime;
use DateTimeInterface;
use Invoiceninja\Einvoice\Models\FACT1\AmountType\RoundingAmount;
use Invoiceninja\Einvoice\Models\FACT1\AmountType\TaxAmount;
use Invoiceninja\Einvoice\Models\FACT1\TaxSubtotalType\TaxSubtotal;
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

class TaxTotal
{
	/** @var TaxAmount */
	#[NotNull]
	#[NotBlank]
	#[Valid]
	#[SerializedName('cbc:TaxAmount')]
	public $TaxAmount;

	/** @var RoundingAmount */
	#[SerializedName('cbc:RoundingAmount')]
	public $RoundingAmount;

	/** @var bool */
	#[SerializedName('cbc:TaxEvidenceIndicator')]
	public bool $TaxEvidenceIndicator;

	/** @var bool */
	#[SerializedName('cbc:TaxIncludedIndicator')]
	public bool $TaxIncludedIndicator;

	/** @var TaxSubtotal[] */
	#[SerializedName('cac:TaxSubtotal')]
	public array $TaxSubtotal;
}
