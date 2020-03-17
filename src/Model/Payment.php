<?php

namespace Phpackage\Siigo\Model;

class Payment implements Model
{
    use ArrayableModel;

    /**
     * @var int ID del medio de pago
     */
    public $paymentMeansCode;

    /**
     * @var float Valor asociado al medio de pago
     */
    public $value;

    /**
     * @var string|null Fecha pago cuota (Para medios de pago Crédito)
     */
    public $dueDate;

    /**
     * @var int|null Número cuota (Para medios de pago Crédito)
     */
    public $dueQuote;

    private function __construct()
    {
    }

    public static function create(int $paymentMeansCode, float $value)
    {
        $payment = new self();
        $payment->paymentMeansCode = $paymentMeansCode;
        $payment->value = $value;

        return $payment;
    }

    /**
     * @return int
     */
    public function getPaymentMeansCode(): int
    {
        return $this->paymentMeansCode;
    }

    /**
     * @param int $paymentMeansCode
     * @return Payment
     */
    public function setPaymentMeansCode(int $paymentMeansCode): Payment
    {
        $this->paymentMeansCode = $paymentMeansCode;
        return $this;
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
     * @return Payment
     */
    public function setValue(float $value): Payment
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    /**
     * @param string|null $dueDate
     * @return Payment
     */
    public function setDueDate(?string $dueDate): Payment
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDueQuote(): ?int
    {
        return $this->dueQuote;
    }

    /**
     * @param int|null $dueQuote
     * @return Payment
     */
    public function setDueQuote(?int $dueQuote): Payment
    {
        $this->dueQuote = $dueQuote;
        return $this;
    }
}
