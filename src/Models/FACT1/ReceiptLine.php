<?php 

namespace Invoiceninja\Einvoice\Models\FACT1;

use DateTime;
use Invoiceninja\Einvoice\Models\FACT1\DocumentReferenceType\DocumentReference;
use Invoiceninja\Einvoice\Models\FACT1\ItemType\Item;
use Invoiceninja\Einvoice\Models\FACT1\LineReferenceType\DespatchLineReference;
use Invoiceninja\Einvoice\Models\FACT1\OrderLineReferenceType\OrderLineReference;
use Invoiceninja\Einvoice\Models\FACT1\QuantityType\OversupplyQuantity;
use Invoiceninja\Einvoice\Models\FACT1\QuantityType\ReceivedQuantity;
use Invoiceninja\Einvoice\Models\FACT1\QuantityType\RejectedQuantity;
use Invoiceninja\Einvoice\Models\FACT1\QuantityType\ShortQuantity;
use Invoiceninja\Einvoice\Models\FACT1\ShipmentType\Shipment;
use Invoiceninja\Einvoice\Models\Normalizers\DecimalPrecision;
use Symfony\Component\Serializer\Attribute\Context;
use Symfony\Component\Serializer\Attribute\SerializedName;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\Length;

class ReceiptLine
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

	/** @var ReceivedQuantity */
	#[SerializedName('cbc:ReceivedQuantity')]
	public $ReceivedQuantity;

	/** @var ShortQuantity */
	#[SerializedName('cbc:ShortQuantity')]
	public $ShortQuantity;

	/** @var string */
	#[SerializedName('cbc:ShortageActionCode')]
	public string $ShortageActionCode;

	/** @var RejectedQuantity */
	#[SerializedName('cbc:RejectedQuantity')]
	public $RejectedQuantity;

	/** @var string */
	#[SerializedName('cbc:RejectReasonCode')]
	public string $RejectReasonCode;

	/** @var string */
	#[SerializedName('cbc:RejectReason')]
	public string $RejectReason;

	/** @var string */
	#[SerializedName('cbc:RejectActionCode')]
	public string $RejectActionCode;

	/** @var string */
	#[SerializedName('cbc:QuantityDiscrepancyCode')]
	public string $QuantityDiscrepancyCode;

	/** @var OversupplyQuantity */
	#[SerializedName('cbc:OversupplyQuantity')]
	public $OversupplyQuantity;

	/** @var DateTime */
	#[Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d'])]
	#[SerializedName('cbc:ReceivedDate')]
	public DateTime $ReceivedDate;

	/** @var string */
	#[SerializedName('cbc:TimingComplaintCode')]
	public string $TimingComplaintCode;

	/** @var string */
	#[SerializedName('cbc:TimingComplaint')]
	public string $TimingComplaint;

	/** @var OrderLineReference */
	#[SerializedName('cac:OrderLineReference')]
	public $OrderLineReference;

	/** @var DespatchLineReference[] */
	#[SerializedName('cac:DespatchLineReference')]
	public array $DespatchLineReference;

	/** @var DocumentReference[] */
	#[SerializedName('cac:DocumentReference')]
	public array $DocumentReference;

	/** @var Item[] */
	#[SerializedName('cac:Item')]
	public array $Item;

	/** @var Shipment[] */
	#[SerializedName('cac:Shipment')]
	public array $Shipment;
}
