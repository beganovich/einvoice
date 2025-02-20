<?php 

namespace Invoiceninja\Einvoice\Models\FACT1\PartyLegalEntityType;

use DateTime;
use DateTimeInterface;
use Invoiceninja\Einvoice\Models\FACT1\AddressType\RegistrationAddress;
use Invoiceninja\Einvoice\Models\FACT1\AmountType\CorporateStockAmount;
use Invoiceninja\Einvoice\Models\FACT1\CorporateRegistrationSchemeType\CorporateRegistrationScheme;
use Invoiceninja\Einvoice\Models\FACT1\PartyType\HeadOfficeParty;
use Invoiceninja\Einvoice\Models\FACT1\ShareholderPartyType\ShareholderParty;
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

class PartyLegalEntity
{
	/** @var string */
	#[Length(min: null, max: 200)]
	#[SerializedName('cbc:RegistrationName')]
	public string $RegistrationName;

	/** @var string */
	#[SerializedName('cbc:CompanyID')]
	public string $CompanyID;

	/** @var DateTime */
	#[Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d'])]
	#[SerializedName('cbc:RegistrationDate')]
	public DateTime $RegistrationDate;

	/** @var DateTime */
	#[Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d'])]
	#[SerializedName('cbc:RegistrationExpirationDate')]
	public DateTime $RegistrationExpirationDate;

	/** @var string */
	#[SerializedName('cbc:CompanyLegalFormCode')]
	public string $CompanyLegalFormCode;

	/** @var string */
	#[Length(min: null, max: 1000)]
	#[SerializedName('cbc:CompanyLegalForm')]
	public string $CompanyLegalForm;

	/** @var bool */
	#[SerializedName('cbc:SoleProprietorshipIndicator')]
	public bool $SoleProprietorshipIndicator;

	/** @var string */
	#[SerializedName('cbc:CompanyLiquidationStatusCode')]
	public string $CompanyLiquidationStatusCode;

	/** @var CorporateStockAmount */
	#[SerializedName('cbc:CorporateStockAmount')]
	public $CorporateStockAmount;

	/** @var bool */
	#[SerializedName('cbc:FullyPaidSharesIndicator')]
	public bool $FullyPaidSharesIndicator;

	/** @var RegistrationAddress */
	#[SerializedName('cac:RegistrationAddress')]
	public $RegistrationAddress;

	/** @var CorporateRegistrationScheme */
	#[SerializedName('cac:CorporateRegistrationScheme')]
	public $CorporateRegistrationScheme;

	/** @var HeadOfficeParty */
	#[SerializedName('cac:HeadOfficeParty')]
	public $HeadOfficeParty;

	/** @var ShareholderParty[] */
	#[SerializedName('cac:ShareholderParty')]
	public array $ShareholderParty;
}
