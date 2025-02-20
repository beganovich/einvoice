<?php 

namespace Invoiceninja\Einvoice\Models\FACT1\ContractType;

use DateTime;
use DateTimeInterface;
use Invoiceninja\Einvoice\Models\FACT1\DeliveryType\ContractualDelivery;
use Invoiceninja\Einvoice\Models\FACT1\DocumentReferenceType\ContractDocumentReference;
use Invoiceninja\Einvoice\Models\FACT1\PeriodType\NominationPeriod;
use Invoiceninja\Einvoice\Models\FACT1\PeriodType\ValidityPeriod;
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

class TransportContract
{
	/** @var string */
	#[SerializedName('cbc:ID')]
	public string $ID;

	/** @var DateTime */
	#[Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d'])]
	#[SerializedName('cbc:IssueDate')]
	public DateTime $IssueDate;

	/** @var DateTime */
	#[Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d\TH:i:s.uP'])]
	#[SerializedName('cbc:IssueTime')]
	public DateTime $IssueTime;

	/** @var DateTime */
	#[Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d'])]
	#[SerializedName('cbc:NominationDate')]
	public DateTime $NominationDate;

	/** @var DateTime */
	#[Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d\TH:i:s.uP'])]
	#[SerializedName('cbc:NominationTime')]
	public DateTime $NominationTime;

	/** @var string */
	#[SerializedName('cbc:ContractTypeCode')]
	public string $ContractTypeCode;

	/** @var string */
	#[SerializedName('cbc:ContractType')]
	public string $ContractType;

	/** @var string */
	#[SerializedName('cbc:Note')]
	public string $Note;

	/** @var string */
	#[SerializedName('cbc:VersionID')]
	public string $VersionID;

	/** @var string */
	#[SerializedName('cbc:Description')]
	public string $Description;

	/** @var ValidityPeriod */
	#[SerializedName('cac:ValidityPeriod')]
	public $ValidityPeriod;

	/** @var ContractDocumentReference[] */
	#[SerializedName('cac:ContractDocumentReference')]
	public array $ContractDocumentReference;

	/** @var NominationPeriod */
	#[SerializedName('cac:NominationPeriod')]
	public $NominationPeriod;

	/** @var ContractualDelivery */
	#[SerializedName('cac:ContractualDelivery')]
	public $ContractualDelivery;
}
