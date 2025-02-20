<?php 

namespace Invoiceninja\Einvoice\Models\FACT1\AllowanceChargeType;

use DateTime;
use DateTimeInterface;
use Invoiceninja\Einvoice\Models\FACT1\AmountType\Amount;
use Invoiceninja\Einvoice\Models\FACT1\AmountType\BaseAmount;
use Invoiceninja\Einvoice\Models\FACT1\AmountType\PerUnitAmount;
use Invoiceninja\Einvoice\Models\FACT1\PaymentMeansType\PaymentMeans;
use Invoiceninja\Einvoice\Models\FACT1\TaxCategoryType\TaxCategory;
use Invoiceninja\Einvoice\Models\FACT1\TaxTotalType\TaxTotal;
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

class ServiceAllowanceCharge
{
	/** @var string */
	#[SerializedName('cbc:ID')]
	public string $ID;

	/** @var bool */
	#[NotNull]
	#[NotBlank]
	#[Valid]
	#[SerializedName('cbc:ChargeIndicator')]
	public bool $ChargeIndicator;

	/** @var string */
	#[Length(min: null, max: 100)]
	#[SerializedName('cbc:AllowanceChargeReasonCode')]
	public string $AllowanceChargeReasonCode;

	/** @var string */
	#[Length(min: null, max: 100)]
	#[SerializedName('cbc:AllowanceChargeReason')]
	public string $AllowanceChargeReason;

	/** @var string */
	#[SerializedName('cbc:MultiplierFactorNumeric')]
	public string $MultiplierFactorNumeric;

	/** @var bool */
	#[SerializedName('cbc:PrepaidIndicator')]
	public bool $PrepaidIndicator;

	/** @var string */
	#[SerializedName('cbc:SequenceNumeric')]
	public string $SequenceNumeric;

	/** @var Amount */
	#[NotNull]
	#[NotBlank]
	#[Valid]
	#[SerializedName('cbc:Amount')]
	public $Amount;

	/** @var BaseAmount */
	#[SerializedName('cbc:BaseAmount')]
	public $BaseAmount;

	/** @var string */
	#[SerializedName('cbc:AccountingCostCode')]
	public string $AccountingCostCode;

	/** @var string */
	#[SerializedName('cbc:AccountingCost')]
	public string $AccountingCost;

	/** @var PerUnitAmount */
	#[SerializedName('cbc:PerUnitAmount')]
	public $PerUnitAmount;

	/** @var TaxCategory[] */
	#[SerializedName('cac:TaxCategory')]
	public array $TaxCategory;

	/** @var TaxTotal */
	#[SerializedName('cac:TaxTotal')]
	public $TaxTotal;

	/** @var PaymentMeans[] */
	#[SerializedName('cac:PaymentMeans')]
	public array $PaymentMeans;
}
