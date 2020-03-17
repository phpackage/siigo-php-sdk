<?php

namespace Phpackage\Siigo\Model;

class InvoiceItem implements Model
{
    use ArrayableModel;

    /**
     * @var string|null Código del producto
     */
    public $productCode;

    /**
     * @var string|null Descripción del producto
     */
    public $description;

    /**
     * @var float|null GrossValue = UnitValue * Quantity
     */
    public $grossValue;

    /**
     * @var float|null BaseValue = GrossValue – DiscountValue
     */
    public $baseValue;

    /**
     * @var int|null Cantidad
     */
    public $quantity;

    /**
     * @var float|null Valor unitario
     */
    public $unitValue;

    /**
     * @var float|null Valor de descuento
     */
    public $discountValue;

    /**
     * @var float|null Porcentaje de descuento
     */
    public $discountPercentage;

    /**
     * @var string|null Impuesto como el IVA o impuesto al consumo
     */
    public $taxAddName;

    /**
     * @var int|null Id del impuesto
     */
    public $taxAddId;

    /**
     * @var float|null Valor del impuesto
     */
    public $taxAddValue;

    /**
     * @var float|null Porcentaje del impuesto
     */
    public $taxAddPercentage;

    /**
     * @var string|null Impuesto como la Retención en la Fuente
     */
    public $taxDiscountName;

    /**
     * @var int|null Id del impuesto
     */
    public $taxDiscountId;

    /**
     * @var float|null Valor del impuesto
     */
    public $taxDiscountValue;

    /**
     * @var float|null Porcentaje del impuesto
     */
    public $taxDiscountPercentage;

    /**
     * @var float|null TotalValue = BaseValue + TaxAddValue + TaxAdd2Value - TaxDiscountValue
     */
    public $totalValue;

    /**
     * @var int|null Campo obsoleto
     */
    public $productSubType;

    /**
     * @var string|null Impuesto como el IVA o impuesto al consumo
     */
    public $taxAdd2Name;

    /**
     * @var int|null Id del impuesto
     */
    public $taxAdd2Id;

    /**
     * @var float|null Valor del impuesto
     */
    public $taxAdd2Value;

    /**
     * @var float|null Porcentaje del impuesto
     */
    public $taxAdd2Percentage;

    /**
     * @var string|null Código de Bodega
     */
    public $wareHouseCode;

    /**
     * @var string|null Identificación del vendedor
     */
    public $salesmanIdentification;

    /**
     * @return string|null
     */
    public function getProductCode(): ?string
    {
        return $this->productCode;
    }

    /**
     * @param string|null $productCode
     * @return InvoiceItem
     */
    public function setProductCode(?string $productCode): InvoiceItem
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
     * @return float|null
     */
    public function getGrossValue(): ?float
    {
        return $this->grossValue;
    }

    /**
     * @param float|null $grossValue
     * @return InvoiceItem
     */
    public function setGrossValue(?float $grossValue): InvoiceItem
    {
        $this->grossValue = $grossValue;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getBaseValue(): ?float
    {
        return $this->baseValue;
    }

    /**
     * @param float|null $baseValue
     * @return InvoiceItem
     */
    public function setBaseValue(?float $baseValue): InvoiceItem
    {
        $this->baseValue = $baseValue;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @param int|null $quantity
     * @return InvoiceItem
     */
    public function setQuantity(?int $quantity): InvoiceItem
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getUnitValue(): ?float
    {
        return $this->unitValue;
    }

    /**
     * @param float|null $unitValue
     * @return InvoiceItem
     */
    public function setUnitValue(?float $unitValue): InvoiceItem
    {
        $this->unitValue = $unitValue;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getDiscountValue(): ?float
    {
        return $this->discountValue;
    }

    /**
     * @param float|null $discountValue
     * @return InvoiceItem
     */
    public function setDiscountValue(?float $discountValue): InvoiceItem
    {
        $this->discountValue = $discountValue;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getDiscountPercentage(): ?float
    {
        return $this->discountPercentage;
    }

    /**
     * @param float|null $discountPercentage
     * @return InvoiceItem
     */
    public function setDiscountPercentage(?float $discountPercentage): InvoiceItem
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
     * @return int|null
     */
    public function getTaxAddId(): ?int
    {
        return $this->taxAddId;
    }

    /**
     * @param int|null $taxAddId
     * @return InvoiceItem
     */
    public function setTaxAddId(?int $taxAddId): InvoiceItem
    {
        $this->taxAddId = $taxAddId;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getTaxAddValue(): ?float
    {
        return $this->taxAddValue;
    }

    /**
     * @param float|null $taxAddValue
     * @return InvoiceItem
     */
    public function setTaxAddValue(?float $taxAddValue): InvoiceItem
    {
        $this->taxAddValue = $taxAddValue;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getTaxAddPercentage(): ?float
    {
        return $this->taxAddPercentage;
    }

    /**
     * @param float|null $taxAddPercentage
     * @return InvoiceItem
     */
    public function setTaxAddPercentage(?float $taxAddPercentage): InvoiceItem
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
     * @return int|null
     */
    public function getTaxDiscountId(): ?int
    {
        return $this->taxDiscountId;
    }

    /**
     * @param int|null $taxDiscountId
     * @return InvoiceItem
     */
    public function setTaxDiscountId(?int $taxDiscountId): InvoiceItem
    {
        $this->taxDiscountId = $taxDiscountId;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getTaxDiscountValue(): ?float
    {
        return $this->taxDiscountValue;
    }

    /**
     * @param float|null $taxDiscountValue
     * @return InvoiceItem
     */
    public function setTaxDiscountValue(?float $taxDiscountValue): InvoiceItem
    {
        $this->taxDiscountValue = $taxDiscountValue;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getTaxDiscountPercentage(): ?float
    {
        return $this->taxDiscountPercentage;
    }

    /**
     * @param float|null $taxDiscountPercentage
     * @return InvoiceItem
     */
    public function setTaxDiscountPercentage(?float $taxDiscountPercentage): InvoiceItem
    {
        $this->taxDiscountPercentage = $taxDiscountPercentage;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getTotalValue(): ?float
    {
        return $this->totalValue;
    }

    /**
     * @param float|null $totalValue
     * @return InvoiceItem
     */
    public function setTotalValue(?float $totalValue): InvoiceItem
    {
        $this->totalValue = $totalValue;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getProductSubType(): ?int
    {
        return $this->productSubType;
    }

    /**
     * @param int|null $productSubType
     * @return InvoiceItem
     */
    public function setProductSubType(?int $productSubType): InvoiceItem
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
     * @return int|null
     */
    public function getTaxAdd2Id(): ?int
    {
        return $this->taxAdd2Id;
    }

    /**
     * @param int|null $taxAdd2Id
     * @return InvoiceItem
     */
    public function setTaxAdd2Id(?int $taxAdd2Id): InvoiceItem
    {
        $this->taxAdd2Id = $taxAdd2Id;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getTaxAdd2Value(): ?float
    {
        return $this->taxAdd2Value;
    }

    /**
     * @param float|null $taxAdd2Value
     * @return InvoiceItem
     */
    public function setTaxAdd2Value(?float $taxAdd2Value): InvoiceItem
    {
        $this->taxAdd2Value = $taxAdd2Value;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getTaxAdd2Percentage(): ?float
    {
        return $this->taxAdd2Percentage;
    }

    /**
     * @param float|null $taxAdd2Percentage
     * @return InvoiceItem
     */
    public function setTaxAdd2Percentage(?float $taxAdd2Percentage): InvoiceItem
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
