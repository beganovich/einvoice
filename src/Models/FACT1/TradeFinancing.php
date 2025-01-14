<?php 

namespace Invoiceninja\Einvoice\Models\FACT1;

use DateTime;
use Invoiceninja\Einvoice\Models\FACT1\ClauseType\Clause;
use Invoiceninja\Einvoice\Models\FACT1\DocumentReferenceType\ContractDocumentReference;
use Invoiceninja\Einvoice\Models\FACT1\DocumentReferenceType\DocumentReference;
use Invoiceninja\Einvoice\Models\FACT1\FinancialAccountType\FinancingFinancialAccount;
use Invoiceninja\Einvoice\Models\FACT1\PartyType\FinancingParty;
use Symfony\Component\Serializer\Attribute\Context;
use Symfony\Component\Serializer\Attribute\SerializedName;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\Valid;

class TradeFinancing
{
	/** @var string */
	#[SerializedName('cbc:ID')]
	public string $ID;

	/** @var string */
	#[SerializedName('cbc:FinancingInstrumentCode')]
	public string $FinancingInstrumentCode;

	/** @var ContractDocumentReference */
	#[SerializedName('cac:ContractDocumentReference')]
	public $ContractDocumentReference;

	/** @var DocumentReference[] */
	#[SerializedName('cac:DocumentReference')]
	public array $DocumentReference;

	/** @var FinancingParty */
	#[NotNull]
	#[NotBlank]
	#[Valid]
	#[SerializedName('cac:FinancingParty')]
	public $FinancingParty;

	/** @var FinancingFinancialAccount */
	#[SerializedName('cac:FinancingFinancialAccount')]
	public $FinancingFinancialAccount;

	/** @var Clause[] */
	#[SerializedName('cac:Clause')]
	public array $Clause;
}
