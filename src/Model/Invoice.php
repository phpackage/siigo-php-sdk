<?php

namespace Phpackage\Siigo\Model;

class Invoice implements Model
{
    use ArrayableModel;

    /**
     * @var InvoiceHeader
     */
    public $header;

    /**
     * @var InvoiceItem[]
     */
    public $items = [];

    /**
     * @var Payment[]
     */
    public $payments = [];

    public function __construct(InvoiceHeader $header)
    {
        $this->header = $header;
    }

    public static function create(
        InvoiceHeader $header,
        ?InvoiceItem $invoiceItem = null,
        ?Payment $payment = null
    ) {
        $invoice = new Invoice($header);

        if ($invoiceItem instanceof InvoiceItem) {
            $invoice->items[] = $invoiceItem;
        }

        if ($payment instanceof Payment) {
            $invoice->payments[] = $payment;
        }

        return $invoice;
    }

    /**
     * @return InvoiceHeader
     */
    public function getHeader(): InvoiceHeader
    {
        return $this->header;
    }

    /**
     * @param InvoiceHeader $header
     * @return Invoice
     */
    public function setHeader(InvoiceHeader $header): Invoice
    {
        $this->header = $header;
        return $this;
    }

    /**
     * @return InvoiceItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param InvoiceItem $item
     * @return Invoice
     */
    public function addItem(InvoiceItem $item): Invoice
    {
        $this->items[] = $item;
        return $this;
    }

    /**
     * @return Payment[]
     */
    public function getPayments(): array
    {
        return $this->payments;
    }

    /**
     * @param Payment $payment
     * @return Invoice
     */
    public function addPayment(Payment $payment): Invoice
    {
        $this->payments[] = $payment;
        return $this;
    }
}
