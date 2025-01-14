<?php 

namespace Invoiceninja\Einvoice\Models\FACT1\DespatchLineType;

use DateTime;
use DateTimeInterface;
use Invoiceninja\Einvoice\Models\FACT1\DocumentReferenceType\DocumentReference;
use Invoiceninja\Einvoice\Models\FACT1\ItemType\Item;
use Invoiceninja\Einvoice\Models\FACT1\OrderLineReferenceType\OrderLineReference;
use Invoiceninja\Einvoice\Models\FACT1\QuantityType\BackorderQuantity;
use Invoiceninja\Einvoice\Models\FACT1\QuantityType\DeliveredQuantity;
use Invoiceninja\Einvoice\Models\FACT1\QuantityType\OutstandingQuantity;
use Invoiceninja\Einvoice\Models\FACT1\QuantityType\OversupplyQuantity;
use Invoiceninja\Einvoice\Models\FACT1\ShipmentType\Shipment;
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

class HandlingUnitDespatchLine
{
	/** @var string */
	#[SerializedName('cbc:ID')]
	public string $ID;

	/** @var string */
	#[SerializedName('cbc:UUID')]
	public string $UUID;

	/** @var string */
	#[SerializedName('cbc:Note')]
	public string $Note;

	/** @var string */
	#[SerializedName('cbc:LineStatusCode')]
	public string $LineStatusCode;

	/** @var DeliveredQuantity */
	#[SerializedName('cbc:DeliveredQuantity')]
	public $DeliveredQuantity;

	/** @var BackorderQuantity */
	#[SerializedName('cbc:BackorderQuantity')]
	public $BackorderQuantity;

	/** @var string */
	#[SerializedName('cbc:BackorderReason')]
	public string $BackorderReason;

	/** @var OutstandingQuantity */
	#[SerializedName('cbc:OutstandingQuantity')]
	public $OutstandingQuantity;

	/** @var string */
	#[SerializedName('cbc:OutstandingReason')]
	public string $OutstandingReason;

	/** @var OversupplyQuantity */
	#[SerializedName('cbc:OversupplyQuantity')]
	public $OversupplyQuantity;

	/** @var OrderLineReference[] */
	#[NotNull]
	#[NotBlank]
	#[Valid]
	#[SerializedName('cac:OrderLineReference')]
	public array $OrderLineReference;

	/** @var DocumentReference[] */
	#[SerializedName('cac:DocumentReference')]
	public array $DocumentReference;

	/** @var Item */
	#[NotNull]
	#[NotBlank]
	#[Valid]
	#[SerializedName('cac:Item')]
	public $Item;

	/** @var Shipment[] */
	#[SerializedName('cac:Shipment')]
	public array $Shipment;
}
