<?php

namespace Phpackage\Siigo\Model;

class VoucherItem implements Model
{
    use ArrayableModel;

    /**
     * @var float Valor
     */
    public $value = 0.0;

    /**
     * @var string|null Descripción
     */
    public $longDescription;

    /**
     * @var int Es débito (1) o crédito (-1)
     */
    public $dC;

    /**
     * @var string|null Cuenta contable
     */
    public $aCAccountCode;

    /**
     * @var string|null Prefijo de la factura de venta (Por ejemplo: FV-1)
     */
    public $duePrefix;

    /**
     * @var int|null Consecutivo
     */
    public $dueConsecutive;

    /**
     * @var int|null Cuota
     */
    public $dueQuote;

    /**
     * @var string|null Fecha de vencimiento de la factura. Formato yyyymmdd
     */
    public $dueDate;

    /**
     * @var int|null Orden de los Items
     */
    public $order;

    private function __construct()
    {
    }

    public static function create(string $productCode)
    {
        $voucherItem = new self();
        $voucherItem->value = $productCode;

        return $voucherItem;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @param float $value
     * @return VoucherItem
     */
    public function setValue(float $value): VoucherItem
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLongDescription(): ?string
    {
        return $this->longDescription;
    }

    /**
     * @param string|null $longDescription
     * @return VoucherItem
     */
    public function setLongDescription(?string $longDescription): VoucherItem
    {
        $this->longDescription = $longDescription;
        return $this;
    }

    /**
     * @return int
     */
    public function getDC(): int
    {
        return $this->dC;
    }

    /**
     * @param int $dC
     * @return VoucherItem
     */
    public function setDC(int $dC): VoucherItem
    {
        $this->dC = $dC;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getACAccountCode(): ?string
    {
        return $this->aCAccountCode;
    }

    /**
     * @param string|null $aCAccountCode
     * @return VoucherItem
     */
    public function setACAccountCode(?string $aCAccountCode): VoucherItem
    {
        $this->aCAccountCode = $aCAccountCode;
        return $this;
    }
}
