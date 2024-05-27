<?php 

namespace Invoiceninja\Einvoice\Models\FACT1;

use Invoiceninja\Einvoice\Models\FACT1\QuantityType\BatchQuantity;
use Invoiceninja\Einvoice\Models\FACT1\QuantityType\ConsumerUnitQuantity;
use Invoiceninja\Einvoice\Models\Normalizers\DecimalPrecision;
use Symfony\Component\Serializer\Attribute\Context;
use Symfony\Component\Serializer\Attribute\SerializedName;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\Valid;

class DeliveryUnit
{
	/** @var BatchQuantity */
	#[NotNull]
	#[NotBlank]
	#[Valid]
	#[SerializedName('cbc:BatchQuantity')]
	public $BatchQuantity;

	/** @var ConsumerUnitQuantity */
	#[SerializedName('cbc:ConsumerUnitQuantity')]
	public $ConsumerUnitQuantity;

	/** @var bool */
	#[SerializedName('cbc:HazardousRiskIndicator')]
	public bool $HazardousRiskIndicator;
}