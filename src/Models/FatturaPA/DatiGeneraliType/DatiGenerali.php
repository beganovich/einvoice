<?php 

namespace Invoiceninja\Einvoice\Models\FatturaPA\DatiGeneraliType;

use DateTime;
use DateTimeInterface;
use Invoiceninja\Einvoice\Models\FatturaPA\DatiDDTType\DatiDDT;
use Invoiceninja\Einvoice\Models\FatturaPA\DatiDocumentiCorrelatiType\DatiContratto;
use Invoiceninja\Einvoice\Models\FatturaPA\DatiDocumentiCorrelatiType\DatiConvenzione;
use Invoiceninja\Einvoice\Models\FatturaPA\DatiDocumentiCorrelatiType\DatiFattureCollegate;
use Invoiceninja\Einvoice\Models\FatturaPA\DatiDocumentiCorrelatiType\DatiOrdineAcquisto;
use Invoiceninja\Einvoice\Models\FatturaPA\DatiDocumentiCorrelatiType\DatiRicezione;
use Invoiceninja\Einvoice\Models\FatturaPA\DatiGeneraliDocumentoType\DatiGeneraliDocumento;
use Invoiceninja\Einvoice\Models\FatturaPA\DatiSALType\DatiSAL;
use Invoiceninja\Einvoice\Models\FatturaPA\DatiTrasportoType\DatiTrasporto;
use Invoiceninja\Einvoice\Models\FatturaPA\FatturaPrincipaleType\FatturaPrincipale;
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

class DatiGenerali
{
	/** @var DatiGeneraliDocumento */
	#[NotNull]
	#[NotBlank]
	#[Valid]
	public $DatiGeneraliDocumento;

	/** @var DatiOrdineAcquisto[] */
	public array $DatiOrdineAcquisto;

	/** @var DatiContratto[] */
	public array $DatiContratto;

	/** @var DatiConvenzione[] */
	public array $DatiConvenzione;

	/** @var DatiRicezione[] */
	public array $DatiRicezione;

	/** @var DatiFattureCollegate[] */
	public array $DatiFattureCollegate;

	/** @var DatiSAL[] */
	public array $DatiSAL;

	/** @var DatiDDT[] */
	public array $DatiDDT;

	/** @var DatiTrasporto */
	public $DatiTrasporto;

	/** @var FatturaPrincipale */
	public $FatturaPrincipale;
}
