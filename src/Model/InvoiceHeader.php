<?php

namespace Phpackage\Siigo\Model;

class InvoiceHeader implements Model
{
    use ArrayableModel;

    /**
     * @var int Identificador de la factura (Parámetro de salida)
     */
    public $id;

    /**
     * @var int|null Identificador del tipo de factura
     */
    public $docCode;

    /**
     * @var int|null Número de la factura de venta
     */
    public $number;

    /**
     * @var string|null Campo obsoleto
     */
    public $emailToSend;

    /**
     * @var string Fecha de la factura. Formato yyyymmdd
     */
    public $docDate;

    /**
     * @var string|null Código de moneda
     */
    public $moneyCode;

    /**
     * @var float Valor en moneda extranjera
     */
    public $exchangeValue = 0.0;

    /**
     * @var float Valor descuentos
     */
    public $discountValue = 0.0;

    /**
     * @var float
     */
    public $vATTotalValue = 0.0;

    /**
     * @var float Valor total de Impuesto al consumo
     */
    public $consumptionTaxTotalValue = 0.0;

    /**
     * @var float
     */
    public $taxDiscTotalValue = 0.0;

    /**
     * @var int Valor Rete IVA
     */
    public $retVATTotalID = -1;

    /**
     * @var float
     */
    public $retVATTotalPercentage = -1.0;

    /**
     * @var float
     */
    public $retVATTotalValue = 0.0;

    /**
     * @var int Valor Rete ICA
     */
    public $retICATotalID = -1;

    /**
     * @var float
     */
    public $retICATotalValue = 0.0;

    /**
     * @var float
     */
    public $retICATotaPercentage = -1.0;

    /**
     * @var float Total Neto = TotalValue = BaseValue + TaxAddValue + TaxAdd2Value - TaxDiscountValue
     */
    public $totalValue = 0.0;

    /**
     * @var float Total Bruto
     */
    public $totalBase = 0.0;

    /**
     * @var string|null Identificador del vendedor
     */
    public $salesmanIdentification;

    /**
     * @var string|null Observaciones de la factura
     */
    public $observations = '';

    /**
     * @var Account|null
     */
    public $account;

    /**
     * @var Contact|null
     */
    public $contact;

    /**
     * @var string|null Centro de costo
     */
    public $costCenterCode;

    /**
     * @var string|null Subcentro de costo
     */
    public $subCostCenterCode;

    private function __construct()
    {
    }

    public static function create(int $docCode, string $docDate)
    {
        $invoiceHeader = new self();
        $invoiceHeader->docCode = $docCode;
        $invoiceHeader->docDate = $docDate;

        return $invoiceHeader;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return InvoiceHeader
     */
    public function setId(?int $id): InvoiceHeader
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getDocCode(): int
    {
        return $this->docCode;
    }

    /**
     * @param int $docCode
     * @return InvoiceHeader
     */
    public function setDocCode(int $docCode): InvoiceHeader
    {
        $this->docCode = $docCode;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * @param int|null $number
     * @return InvoiceHeader
     */
    public function setNumber(?int $number): InvoiceHeader
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmailToSend(): ?string
    {
        return $this->emailToSend;
    }

    /**
     * @param string|null $emailToSend
     * @return InvoiceHeader
     */
    public function setEmailToSend(?string $emailToSend): InvoiceHeader
    {
        $this->emailToSend = $emailToSend;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocDate(): string
    {
        return $this->docDate;
    }

    /**
     * @param string $docDate
     * @return InvoiceHeader
     */
    public function setDocDate(string $docDate): InvoiceHeader
    {
        $this->docDate = $docDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMoneyCode(): ?string
    {
        return $this->moneyCode;
    }

    /**
     * @param string|null $moneyCode
     * @return InvoiceHeader
     */
    public function setMoneyCode(?string $moneyCode): InvoiceHeader
    {
        $this->moneyCode = $moneyCode;
        return $this;
    }

    /**
     * @return float
     */
    public function getExchangeValue(): float
    {
        return $this->exchangeValue;
    }

    /**
     * @param float $exchangeValue
     * @return InvoiceHeader
     */
    public function setExchangeValue(float $exchangeValue): InvoiceHeader
    {
        $this->exchangeValue = $exchangeValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountValue(): float
    {
        return $this->discountValue;
    }

    /**
     * @param float $discountValue
     * @return InvoiceHeader
     */
    public function setDiscountValue(float $discountValue): InvoiceHeader
    {
        $this->discountValue = $discountValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getVATTotalValue(): float
    {
        return $this->vATTotalValue;
    }

    /**
     * @param float $vATTotalValue
     * @return InvoiceHeader
     */
    public function setVATTotalValue(float $vATTotalValue): InvoiceHeader
    {
        $this->vATTotalValue = $vATTotalValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getConsumptionTaxTotalValue(): float
    {
        return $this->consumptionTaxTotalValue;
    }

    /**
     * @param float $consumptionTaxTotalValue
     * @return InvoiceHeader
     */
    public function setConsumptionTaxTotalValue(float $consumptionTaxTotalValue): InvoiceHeader
    {
        $this->consumptionTaxTotalValue = $consumptionTaxTotalValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxDiscTotalValue(): float
    {
        return $this->taxDiscTotalValue;
    }

    /**
     * @param float $taxDiscTotalValue
     * @return InvoiceHeader
     */
    public function setTaxDiscTotalValue(float $taxDiscTotalValue): InvoiceHeader
    {
        $this->taxDiscTotalValue = $taxDiscTotalValue;
        return $this;
    }

    /**
     * @return int
     */
    public function getRetVATTotalID(): int
    {
        return $this->retVATTotalID;
    }

    /**
     * @param int $retVATTotalID
     * @return InvoiceHeader
     */
    public function setRetVATTotalID(int $retVATTotalID): InvoiceHeader
    {
        $this->retVATTotalID = $retVATTotalID;
        return $this;
    }

    /**
     * @return float
     */
    public function getRetVATTotalPercentage(): float
    {
        return $this->retVATTotalPercentage;
    }

    /**
     * @param float $retVATTotalPercentage
     * @return InvoiceHeader
     */
    public function setRetVATTotalPercentage(float $retVATTotalPercentage): InvoiceHeader
    {
        $this->retVATTotalPercentage = $retVATTotalPercentage;
        return $this;
    }

    /**
     * @return float
     */
    public function getRetVATTotalValue(): float
    {
        return $this->retVATTotalValue;
    }

    /**
     * @param float $retVATTotalValue
     * @return InvoiceHeader
     */
    public function setRetVATTotalValue(float $retVATTotalValue): InvoiceHeader
    {
        $this->retVATTotalValue = $retVATTotalValue;
        return $this;
    }

    /**
     * @return int
     */
    public function getRetICATotalID(): int
    {
        return $this->retICATotalID;
    }

    /**
     * @param int $retICATotalID
     * @return InvoiceHeader
     */
    public function setRetICATotalID(int $retICATotalID): InvoiceHeader
    {
        $this->retICATotalID = $retICATotalID;
        return $this;
    }

    /**
     * @return float
     */
    public function getRetICATotalValue(): float
    {
        return $this->retICATotalValue;
    }

    /**
     * @param float $retICATotalValue
     * @return InvoiceHeader
     */
    public function setRetICATotalValue(float $retICATotalValue): InvoiceHeader
    {
        $this->retICATotalValue = $retICATotalValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getRetICATotaPercentage(): float
    {
        return $this->retICATotaPercentage;
    }

    /**
     * @param float $retICATotaPercentage
     * @return InvoiceHeader
     */
    public function setRetICATotaPercentage(float $retICATotaPercentage): InvoiceHeader
    {
        $this->retICATotaPercentage = $retICATotaPercentage;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalValue(): float
    {
        return $this->totalValue;
    }

    /**
     * @param float $totalValue
     * @return InvoiceHeader
     */
    public function setTotalValue(float $totalValue): InvoiceHeader
    {
        $this->totalValue = $totalValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalBase(): float
    {
        return $this->totalBase;
    }

    /**
     * @param float $totalBase
     * @return InvoiceHeader
     */
    public function setTotalBase(float $totalBase): InvoiceHeader
    {
        $this->totalBase = $totalBase;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSalesmanIdentification(): ?string
    {
        return $this->salesmanIdentification;
    }

    /**
     * @param string|null $salesmanIdentification
     * @return InvoiceHeader
     */
    public function setSalesmanIdentification(?string $salesmanIdentification): InvoiceHeader
    {
        $this->salesmanIdentification = $salesmanIdentification;
        return $this;
    }

    /**
     * @return string
     */
    public function getObservations(): string
    {
        return $this->observations;
    }

    /**
     * @param string $observations
     * @return InvoiceHeader
     */
    public function setObservations(string $observations): InvoiceHeader
    {
        $this->observations = $observations;
        return $this;
    }

    /**
     * @return Account|null
     */
    public function getAccount(): ?Account
    {
        return $this->account;
    }

    /**
     * @param Account|null $account
     * @return InvoiceHeader
     */
    public function setAccount(?Account $account): InvoiceHeader
    {
        $this->account = $account;
        return $this;
    }

    /**
     * @return Contact|null
     */
    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    /**
     * @param Contact|null $contact
     * @return InvoiceHeader
     */
    public function setContact(?Contact $contact): InvoiceHeader
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCostCenterCode(): ?string
    {
        return $this->costCenterCode;
    }

    /**
     * @param string|null $costCenterCode
     * @return InvoiceHeader
     */
    public function setCostCenterCode(?string $costCenterCode): InvoiceHeader
    {
        $this->costCenterCode = $costCenterCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubCostCenterCode(): ?string
    {
        return $this->subCostCenterCode;
    }

    /**
     * @param string|null $subCostCenterCode
     * @return InvoiceHeader
     */
    public function setSubCostCenterCode(?string $subCostCenterCode): InvoiceHeader
    {
        $this->subCostCenterCode = $subCostCenterCode;
        return $this;
    }
}
