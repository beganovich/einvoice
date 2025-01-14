<?php 

namespace Invoiceninja\Einvoice\Models\FACT1;

use Symfony\Component\Serializer\Attribute\Context;
use Symfony\Component\Serializer\Attribute\SerializedName;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;

class ItemPropertyRange
{
	/** @var string */
	#[SerializedName('cbc:MinimumValue')]
	public string $MinimumValue;

	/** @var string */
	#[SerializedName('cbc:MaximumValue')]
	public string $MaximumValue;
}
