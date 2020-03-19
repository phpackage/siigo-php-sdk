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

    private function __construct()
    {
    }

    public static function create(
        InvoiceHeader $header,
        InvoiceItem $invoiceItem,
        Payment $payment
    ) {
        $invoice = new Invoice();
        $invoice->header = $header;
        $invoice->items[] = $invoiceItem;
        $invoice->payments[] = $payment;

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
     * @param InvoiceItem[] $items
     * @return Invoice
     */
    public function setItems(array $items): Invoice
    {
        $this->items = $items;
        return $this;
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
     * @param Payment[] $payments
     * @return Invoice
     */
    public function setPayments(array $payments): Invoice
    {
        $this->payments = $payments;
        return $this;
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
