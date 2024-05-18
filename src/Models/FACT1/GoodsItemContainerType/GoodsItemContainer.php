<?php 

namespace Invoiceninja\Einvoice\Models\FACT1\GoodsItemContainerType;

use Carbon\Carbon;
use Invoiceninja\Einvoice\Models\FACT1\TransportEquipmentType\TransportEquipment;
use Invoiceninja\Einvoice\Models\Transformers\FloatTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class GoodsItemContainer extends Data
{
	public ?string $ID;

	#[WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $Quantity;
	public TransportEquipment|Optional $TransportEquipment;
}
