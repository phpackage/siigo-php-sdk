<?php

namespace Phpackage\Siigo\Model;

class VoucherHeader implements Model
{
    use ArrayableModel;

    /**
     * @var int Identificador del recibo de caja (Parámetro de salida)
     */
    public $id;

    /**
     * @var int|null Identificador del tipo de recibo de caja
     */
    public $docCode;

    /**
     * @var int|null Número del Recibo de caja
     */
    public $number;

    /**
     * @var string|null Nombre del comprobante
     */
    public $docName;

    /**
     * @var string Fecha de elaboración del recibo de caja. Formato yyyymmdd
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
     * @var float Valor pagado
     */
    public $totalValue = 0.0;

    /**
     * @var string|null Observaciones del recibo de caja
     */
    public $observations;

    /**
     * @var string|null Identificación del Tercero
     */
    public $identification;

    /**
     * @var int Sucursal (Por defecto: 0)
     */
    public $branchOffice = 0;

    /**
     * @var string|null Centro de costo
     */
    public $costCenterCode;

    /**
     * @var string|null Subcentro de costo
     */
    public $subCostCenterCode;

    /**
     * @var int|null Tipo de recibo de caja: 0 = Abono a deuda, 1 = Anticipo, 2 = Avanzado
     */
    public $voucherType;

    /**
     * @var int|null ID del medio de pago
     */
    public $paymentMeanCode;

    private function __construct()
    {
    }

    public static function create(int $docCode, string $docDate)
    {
        $voucherHeader = new self();
        $voucherHeader->docCode = $docCode;
        $voucherHeader->docDate = $docDate;

        return $voucherHeader;
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
     * @return VoucherHeader
     */
    public function setId(?int $id): VoucherHeader
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
     * @return VoucherHeader
     */
    public function setDocCode(int $docCode): VoucherHeader
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
     * @return VoucherHeader
     */
    public function setNumber(?int $number): VoucherHeader
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDocName(): ?string
    {
        return $this->docName;
    }

    /**
     * @param string|null $docName
     * @return VoucherHeader
     */
    public function setDocName(?string $docName): VoucherHeader
    {
        $this->docName = $docName;
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
     * @return VoucherHeader
     */
    public function setDocDate(string $docDate): VoucherHeader
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
     * @return VoucherHeader
     */
    public function setMoneyCode(?string $moneyCode): VoucherHeader
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
     * @return VoucherHeader
     */
    public function setExchangeValue(float $exchangeValue): VoucherHeader
    {
        $this->exchangeValue = $exchangeValue;
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
     * @return VoucherHeader
     */
    public function setTotalValue(float $totalValue): VoucherHeader
    {
        $this->totalValue = $totalValue;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getObservations(): string
    {
        return $this->observations;
    }

    /**
     * @param string|null $observations
     * @return VoucherHeader
     */
    public function setObservations(?string $observations): VoucherHeader
    {
        $this->observations = $observations;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIdentification(): ?string
    {
        return $this->identification;
    }

    /**
     * @param string|null $identification
     * @return VoucherHeader
     */
    public function setIdentification(?string $identification): VoucherHeader
    {
        $this->identification = $identification;
        return $this;
    }

    /**
     * @return int
     */
    public function getBranchOffice(): int
    {
        return $this->branchOffice;
    }

    /**
     * @param int $branchOffice
     * @return VoucherHeader
     */
    public function setBranchOffice(int $branchOffice): VoucherHeader
    {
        $this->branchOffice = $branchOffice;
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
     * @return VoucherHeader
     */
    public function setCostCenterCode(?string $costCenterCode): VoucherHeader
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
     * @return VoucherHeader
     */
    public function setSubCostCenterCode(?string $subCostCenterCode): VoucherHeader
    {
        $this->subCostCenterCode = $subCostCenterCode;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getVoucherType(): ?int
    {
        return $this->voucherType;
    }

    /**
     * @param int|null $voucherType
     * @return VoucherHeader
     */
    public function setVoucherType(?int $voucherType): VoucherHeader
    {
        $this->voucherType = $voucherType;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPaymentMeanCode(): ?int
    {
        return $this->paymentMeanCode;
    }

    /**
     * @param int|null $paymentMeanCode
     * @return VoucherHeader
     */
    public function setPaymentMeanCode(?int $paymentMeanCode): VoucherHeader
    {
        $this->paymentMeanCode = $paymentMeanCode;
        return $this;
    }
}
