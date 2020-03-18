<?php

namespace Phpackage\Siigo\Model;

class InvoiceItem implements Model
{
    use ArrayableModel;

    /**
     * @var string Código del producto
     */
    public $productCode;

    /**
     * @var string|null Descripción del producto
     */
    public $description;

    /**
     * @var float GrossValue = UnitValue * Quantity
     */
    public $grossValue = 0.0;

    /**
     * @var float BaseValue = GrossValue – DiscountValue
     */
    public $baseValue = 0.0;

    /**
     * @var int Cantidad
     */
    public $quantity = 0;

    /**
     * @var float Valor unitario
     */
    public $unitValue = 0.0;

    /**
     * @var float Valor de descuento
     */
    public $discountValue = 0.0;

    /**
     * @var float Porcentaje de descuento
     */
    public $discountPercentage = 0.0;

    /**
     * @var string|null Impuesto como el IVA o impuesto al consumo
     */
    public $taxAddName;

    /**
     * @var int Id del impuesto
     */
    public $taxAddId = -1;

    /**
     * @var float Valor del impuesto
     */
    public $taxAddValue = 0.0;

    /**
     * @var float Porcentaje del impuesto
     */
    public $taxAddPercentage = 0.0;

    /**
     * @var string|null Impuesto como la Retención en la Fuente
     */
    public $taxDiscountName;

    /**
     * @var int Id del impuesto
     */
    public $taxDiscountId = -1;

    /**
     * @var float Valor del impuesto
     */
    public $taxDiscountValue = 0.0;

    /**
     * @var float Porcentaje del impuesto
     */
    public $taxDiscountPercentage = 0.0;

    /**
     * @var float TotalValue = BaseValue + TaxAddValue + TaxAdd2Value - TaxDiscountValue
     */
    public $totalValue = 0.0;

    /**
     * @var int Campo obsoleto
     */
    public $productSubType = 0;

    /**
     * @var string|null Impuesto como el IVA o impuesto al consumo
     */
    public $taxAdd2Name;

    /**
     * @var int Id del impuesto
     */
    public $taxAdd2Id = -1;

    /**
     * @var float Valor del impuesto
     */
    public $taxAdd2Value = 0.0;

    /**
     * @var float Porcentaje del impuesto
     */
    public $taxAdd2Percentage = 0.0;

    /**
     * @var string|null Código de Bodega
     */
    public $wareHouseCode;

    /**
     * @var string|null Identificación del vendedor
     */
    public $salesmanIdentification;

    private function __construct()
    {
    }

    public static function create(string $productCode)
    {
        $invoiceItem = new self();
        $invoiceItem->productCode = $productCode;

        return $invoiceItem;
    }

    /**
     * @return string
     */
    public function getProductCode(): string
    {
        return $this->productCode;
    }

    /**
     * @param string $productCode
     * @return InvoiceItem
     */
    public function setProductCode(string $productCode): InvoiceItem
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return InvoiceItem
     */
    public function setDescription(?string $description): InvoiceItem
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return float
     */
    public function getGrossValue(): float
    {
        return $this->grossValue;
    }

    /**
     * @param float $grossValue
     * @return InvoiceItem
     */
    public function setGrossValue(float $grossValue): InvoiceItem
    {
        $this->grossValue = $grossValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseValue(): float
    {
        return $this->baseValue;
    }

    /**
     * @param float $baseValue
     * @return InvoiceItem
     */
    public function setBaseValue(float $baseValue): InvoiceItem
    {
        $this->baseValue = $baseValue;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return InvoiceItem
     */
    public function setQuantity(int $quantity): InvoiceItem
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnitValue(): float
    {
        return $this->unitValue;
    }

    /**
     * @param float $unitValue
     * @return InvoiceItem
     */
    public function setUnitValue(float $unitValue): InvoiceItem
    {
        $this->unitValue = $unitValue;
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
     * @return InvoiceItem
     */
    public function setDiscountValue(float $discountValue): InvoiceItem
    {
        $this->discountValue = $discountValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountPercentage(): float
    {
        return $this->discountPercentage;
    }

    /**
     * @param float $discountPercentage
     * @return InvoiceItem
     */
    public function setDiscountPercentage(float $discountPercentage): InvoiceItem
    {
        $this->discountPercentage = $discountPercentage;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTaxAddName(): ?string
    {
        return $this->taxAddName;
    }

    /**
     * @param string|null $taxAddName
     * @return InvoiceItem
     */
    public function setTaxAddName(?string $taxAddName): InvoiceItem
    {
        $this->taxAddName = $taxAddName;
        return $this;
    }

    /**
     * @return int
     */
    public function getTaxAddId(): int
    {
        return $this->taxAddId;
    }

    /**
     * @param int $taxAddId
     * @return InvoiceItem
     */
    public function setTaxAddId(int $taxAddId): InvoiceItem
    {
        $this->taxAddId = $taxAddId;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxAddValue(): float
    {
        return $this->taxAddValue;
    }

    /**
     * @param float $taxAddValue
     * @return InvoiceItem
     */
    public function setTaxAddValue(float $taxAddValue): InvoiceItem
    {
        $this->taxAddValue = $taxAddValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxAddPercentage(): float
    {
        return $this->taxAddPercentage;
    }

    /**
     * @param float $taxAddPercentage
     * @return InvoiceItem
     */
    public function setTaxAddPercentage(float $taxAddPercentage): InvoiceItem
    {
        $this->taxAddPercentage = $taxAddPercentage;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTaxDiscountName(): ?string
    {
        return $this->taxDiscountName;
    }

    /**
     * @param string|null $taxDiscountName
     * @return InvoiceItem
     */
    public function setTaxDiscountName(?string $taxDiscountName): InvoiceItem
    {
        $this->taxDiscountName = $taxDiscountName;
        return $this;
    }

    /**
     * @return int
     */
    public function getTaxDiscountId(): int
    {
        return $this->taxDiscountId;
    }

    /**
     * @param int $taxDiscountId
     * @return InvoiceItem
     */
    public function setTaxDiscountId(int $taxDiscountId): InvoiceItem
    {
        $this->taxDiscountId = $taxDiscountId;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxDiscountValue(): float
    {
        return $this->taxDiscountValue;
    }

    /**
     * @param float $taxDiscountValue
     * @return InvoiceItem
     */
    public function setTaxDiscountValue(float $taxDiscountValue): InvoiceItem
    {
        $this->taxDiscountValue = $taxDiscountValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxDiscountPercentage(): float
    {
        return $this->taxDiscountPercentage;
    }

    /**
     * @param float $taxDiscountPercentage
     * @return InvoiceItem
     */
    public function setTaxDiscountPercentage(float $taxDiscountPercentage): InvoiceItem
    {
        $this->taxDiscountPercentage = $taxDiscountPercentage;
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
     * @return InvoiceItem
     */
    public function setTotalValue(float $totalValue): InvoiceItem
    {
        $this->totalValue = $totalValue;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductSubType(): int
    {
        return $this->productSubType;
    }

    /**
     * @param int $productSubType
     * @return InvoiceItem
     */
    public function setProductSubType(int $productSubType): InvoiceItem
    {
        $this->productSubType = $productSubType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTaxAdd2Name(): ?string
    {
        return $this->taxAdd2Name;
    }

    /**
     * @param string|null $taxAdd2Name
     * @return InvoiceItem
     */
    public function setTaxAdd2Name(?string $taxAdd2Name): InvoiceItem
    {
        $this->taxAdd2Name = $taxAdd2Name;
        return $this;
    }

    /**
     * @return int
     */
    public function getTaxAdd2Id(): int
    {
        return $this->taxAdd2Id;
    }

    /**
     * @param int $taxAdd2Id
     * @return InvoiceItem
     */
    public function setTaxAdd2Id(int $taxAdd2Id): InvoiceItem
    {
        $this->taxAdd2Id = $taxAdd2Id;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxAdd2Value(): float
    {
        return $this->taxAdd2Value;
    }

    /**
     * @param float $taxAdd2Value
     * @return InvoiceItem
     */
    public function setTaxAdd2Value(float $taxAdd2Value): InvoiceItem
    {
        $this->taxAdd2Value = $taxAdd2Value;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxAdd2Percentage(): float
    {
        return $this->taxAdd2Percentage;
    }

    /**
     * @param float $taxAdd2Percentage
     * @return InvoiceItem
     */
    public function setTaxAdd2Percentage(float $taxAdd2Percentage): InvoiceItem
    {
        $this->taxAdd2Percentage = $taxAdd2Percentage;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWareHouseCode(): ?string
    {
        return $this->wareHouseCode;
    }

    /**
     * @param string|null $wareHouseCode
     * @return InvoiceItem
     */
    public function setWareHouseCode(?string $wareHouseCode): InvoiceItem
    {
        $this->wareHouseCode = $wareHouseCode;
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
     * @return InvoiceItem
     */
    public function setSalesmanIdentification(?string $salesmanIdentification): InvoiceItem
    {
        $this->salesmanIdentification = $salesmanIdentification;
        return $this;
    }
}
