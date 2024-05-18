<?php 

namespace Invoiceninja\Einvoice\Models\FACT1\PaymentMeansType;

use Carbon\Carbon;
use Invoiceninja\Einvoice\Models\FACT1\CardAccountType\CardAccount;
use Invoiceninja\Einvoice\Models\FACT1\CreditAccountType\CreditAccount;
use Invoiceninja\Einvoice\Models\FACT1\FinancialAccountType\PayeeFinancialAccount;
use Invoiceninja\Einvoice\Models\FACT1\FinancialAccountType\PayerFinancialAccount;
use Invoiceninja\Einvoice\Models\FACT1\PaymentMandateType\PaymentMandate;
use Invoiceninja\Einvoice\Models\FACT1\TradeFinancingType\TradeFinancing;
use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Transformers\DateTimeInterfaceTransformer;

class PaymentMeans extends Data
{
	public string|Optional $ID;
	public ?string $PaymentMeansCode;

	#[WithTransformer('Spatie\LaravelData\Transformers\DateTimeInterfaceTransformer', format: 'Y-m-d')]
	public Carbon|Optional $PaymentDueDate;
	public string|Optional $PaymentChannelCode;
	public string|Optional $InstructionID;
	public string|Optional $InstructionNote;

	#[Max(140)]
	public string|Optional $PaymentID;
	public CardAccount|Optional $CardAccount;
	public PayerFinancialAccount|Optional $PayerFinancialAccount;
	public PayeeFinancialAccount|Optional $PayeeFinancialAccount;
	public CreditAccount|Optional $CreditAccount;
	public PaymentMandate|Optional $PaymentMandate;
	public TradeFinancing|Optional $TradeFinancing;
}