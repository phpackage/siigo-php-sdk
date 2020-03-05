<?php

namespace Phpackage\Siigo\Model;

final class Product implements Model
{
    use ArrayableModel;

    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $referenceManufactures;

    /**
     * @var string|null
     */
    private $productTypeKey;

    /**
     * @var string|null
     */
    private $measureUnit;

    /**
     * @var string|null
     */
    private $codeBars;

    /**
     * @var string|null
     */
    private $comments;

    /**
     * @var int
     */
    private $taxAddID = 0;

    /**
     * @var int
     */
    private $taxDiscID = 0;

    /**
     * @var bool
     */
    private $isIncluded = false;

    /**
     * @var float
     */
    private $cost = 0;

    /**
     * @var bool
     */
    private $isInventoryControl = false;

    /**
     * @var int
     */
    private $state = 0;

    /**
     * @var float|null
     */
    private $priceList1;

    /**
     * @var float|null
     */
    private $priceList2;

    /**
     * @var float|null
     */
    private $priceList3;

    /**
     * @var float|null
     */
    private $priceList4;

    /**
     * @var float|null
     */
    private $priceList5;

    /**
     * @var float|null
     */
    private $priceList6;

    /**
     * @var float|null
     */
    private $priceList7;

    /**
     * @var float|null
     */
    private $priceList8;

    /**
     * @var float|null
     */
    private $priceList9;

    /**
     * @var float|null
     */
    private $priceList10;

    /**
     * @var float|null
     */
    private $priceList11;

    /**
     * @var float|null
     */
    private $priceList12;

    /**
     * @var string|null
     */
    private $image;

    /**
     * @var int|null
     */
    private $accountGroupID;

    /**
     * @var int
     */
    private $subType = 0;

    /**
     * @var int
     */
    private $taxAdd2ID = 0;

    /**
     * @var float|null
     */
    private $taxImpoValue;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return Product
     */
    public function setId(?int $id): Product
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string|null $code
     * @return Product
     */
    public function setCode(?string $code): Product
    {
        $this->code = $code;
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
     * @param string $description
     * @return Product
     */
    public function setDescription(string $description): Product
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReferenceManufactures(): ?string
    {
        return $this->referenceManufactures;
    }

    /**
     * @param string|null $referenceManufactures
     * @return Product
     */
    public function setReferenceManufactures(?string $referenceManufactures): Product
    {
        $this->referenceManufactures = $referenceManufactures;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getProductTypeKey(): ?string
    {
        return $this->productTypeKey;
    }

    /**
     * @param string|null $productTypeKey
     * @return Product
     */
    public function setProductTypeKey(?string $productTypeKey): Product
    {
        $this->productTypeKey = $productTypeKey;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMeasureUnit(): ?string
    {
        return $this->measureUnit;
    }

    /**
     * @param string|null $measureUnit
     * @return Product
     */
    public function setMeasureUnit(?string $measureUnit): Product
    {
        $this->measureUnit = $measureUnit;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodeBars(): ?string
    {
        return $this->codeBars;
    }

    /**
     * @param string|null $codeBars
     * @return Product
     */
    public function setCodeBars(?string $codeBars): Product
    {
        $this->codeBars = $codeBars;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getComments(): ?string
    {
        return $this->comments;
    }

    /**
     * @param string|null $comments
     * @return Product
     */
    public function setComments(?string $comments): Product
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * @return int
     */
    public function getTaxAddID(): int
    {
        return $this->taxAddID;
    }

    /**
     * @param int $taxAddID
     * @return Product
     */
    public function setTaxAddID(int $taxAddID): Product
    {
        $this->taxAddID = $taxAddID;
        return $this;
    }

    /**
     * @return int
     */
    public function getTaxDiscID(): int
    {
        return $this->taxDiscID;
    }

    /**
     * @param int $taxDiscID
     * @return Product
     */
    public function setTaxDiscID(int $taxDiscID): Product
    {
        $this->taxDiscID = $taxDiscID;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsIncluded(): bool
    {
        return $this->isIncluded;
    }

    /**
     * @param bool $isIncluded
     * @return Product
     */
    public function setIsIncluded(bool $isIncluded): Product
    {
        $this->isIncluded = $isIncluded;
        return $this;
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     * @return Product
     */
    public function setCost(float $cost): Product
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInventoryControl(): bool
    {
        return $this->isInventoryControl;
    }

    /**
     * @param bool $isInventoryControl
     * @return Product
     */
    public function setIsInventoryControl(bool $isInventoryControl): Product
    {
        $this->isInventoryControl = $isInventoryControl;
        return $this;
    }

    /**
     * @return int
     */
    public function getState(): int
    {
        return $this->state;
    }

    /**
     * @param int $state
     * @return Product
     */
    public function setState(int $state): Product
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPriceList1(): ?float
    {
        return $this->priceList1;
    }

    /**
     * @param float|null $priceList1
     * @return Product
     */
    public function setPriceList1(?float $priceList1): Product
    {
        $this->priceList1 = $priceList1;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPriceList2(): ?float
    {
        return $this->priceList2;
    }

    /**
     * @param float|null $priceList2
     * @return Product
     */
    public function setPriceList2(?float $priceList2): Product
    {
        $this->priceList2 = $priceList2;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPriceList3(): ?float
    {
        return $this->priceList3;
    }

    /**
     * @param float|null $priceList3
     * @return Product
     */
    public function setPriceList3(?float $priceList3): Product
    {
        $this->priceList3 = $priceList3;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPriceList4(): ?float
    {
        return $this->priceList4;
    }

    /**
     * @param float|null $priceList4
     * @return Product
     */
    public function setPriceList4(?float $priceList4): Product
    {
        $this->priceList4 = $priceList4;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPriceList5(): ?float
    {
        return $this->priceList5;
    }

    /**
     * @param float|null $priceList5
     * @return Product
     */
    public function setPriceList5(?float $priceList5): Product
    {
        $this->priceList5 = $priceList5;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPriceList6(): ?float
    {
        return $this->priceList6;
    }

    /**
     * @param float|null $priceList6
     * @return Product
     */
    public function setPriceList6(?float $priceList6): Product
    {
        $this->priceList6 = $priceList6;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPriceList7(): ?float
    {
        return $this->priceList7;
    }

    /**
     * @param float|null $priceList7
     * @return Product
     */
    public function setPriceList7(?float $priceList7): Product
    {
        $this->priceList7 = $priceList7;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPriceList8(): ?float
    {
        return $this->priceList8;
    }

    /**
     * @param float|null $priceList8
     * @return Product
     */
    public function setPriceList8(?float $priceList8): Product
    {
        $this->priceList8 = $priceList8;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPriceList9(): ?float
    {
        return $this->priceList9;
    }

    /**
     * @param float|null $priceList9
     * @return Product
     */
    public function setPriceList9(?float $priceList9): Product
    {
        $this->priceList9 = $priceList9;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPriceList10(): ?float
    {
        return $this->priceList10;
    }

    /**
     * @param float|null $priceList10
     * @return Product
     */
    public function setPriceList10(?float $priceList10): Product
    {
        $this->priceList10 = $priceList10;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPriceList11(): ?float
    {
        return $this->priceList11;
    }

    /**
     * @param float|null $priceList11
     * @return Product
     */
    public function setPriceList11(?float $priceList11): Product
    {
        $this->priceList11 = $priceList11;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPriceList12(): ?float
    {
        return $this->priceList12;
    }

    /**
     * @param float|null $priceList12
     * @return Product
     */
    public function setPriceList12(?float $priceList12): Product
    {
        $this->priceList12 = $priceList12;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string|null $image
     * @return Product
     */
    public function setImage(?string $image): Product
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAccountGroupID(): ?int
    {
        return $this->accountGroupID;
    }

    /**
     * @param int $accountGroupID
     * @return Product
     */
    public function setAccountGroupID(int $accountGroupID): Product
    {
        $this->accountGroupID = $accountGroupID;
        return $this;
    }

    /**
     * @return int
     */
    public function getSubType(): int
    {
        return $this->subType;
    }

    /**
     * @param int $subType
     * @return Product
     */
    public function setSubType(int $subType): Product
    {
        $this->subType = $subType;
        return $this;
    }

    /**
     * @return int
     */
    public function getTaxAdd2ID(): int
    {
        return $this->taxAdd2ID;
    }

    /**
     * @param int $taxAdd2ID
     * @return Product
     */
    public function setTaxAdd2ID(int $taxAdd2ID): Product
    {
        $this->taxAdd2ID = $taxAdd2ID;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getTaxImpoValue(): ?float
    {
        return $this->taxImpoValue;
    }

    /**
     * @param float|null $taxImpoValue
     * @return Product
     */
    public function setTaxImpoValue(?float $taxImpoValue): Product
    {
        $this->taxImpoValue = $taxImpoValue;
        return $this;
    }
}
