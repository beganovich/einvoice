<?php 

namespace Invoiceninja\Einvoice\Models\FACT1;

use Carbon\Carbon;
use Invoiceninja\Einvoice\Models\FACT1\AddressType\ResidenceAddress;
use Invoiceninja\Einvoice\Models\FACT1\ContactType\Contact;
use Invoiceninja\Einvoice\Models\FACT1\DocumentReferenceType\IdentityDocumentReference;
use Invoiceninja\Einvoice\Models\FACT1\FinancialAccountType\FinancialAccount;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class Person extends Data
{
	public string|Optional $ID;
	public string|Optional $FirstName;
	public string|Optional $FamilyName;
	public string|Optional $Title;
	public string|Optional $MiddleName;
	public string|Optional $OtherName;
	public string|Optional $NameSuffix;
	public string|Optional $JobTitle;
	public string|Optional $NationalityID;
	public string|Optional $GenderCode;
	public Carbon|Optional $BirthDate;
	public string|Optional $BirthplaceName;
	public string|Optional $OrganizationDepartment;
	public Contact|Optional $Contact;
	public FinancialAccount|Optional $FinancialAccount;
	public IdentityDocumentReference|Optional $IdentityDocumentReference;
	public ResidenceAddress|Optional $ResidenceAddress;
}