<?php

namespace Phpackage\Siigo\Model;

class Voucher implements Model
{
    use ArrayableModel;

    /**
     * @var VoucherHeader
     */
    public $header;

    /**
     * @var VoucherItem[]
     */
    public $items = [];

    public function __construct(VoucherHeader $header)
    {
        $this->header = $header;
    }

    public static function create(
        VoucherHeader $header,
        ?VoucherItem $invoiceItem = null
    ) {
        $voucher = new Voucher($header);

        if ($invoiceItem instanceof VoucherItem) {
            $voucher->items[] = $invoiceItem;
        }

        return $voucher;
    }

    /**
     * @return VoucherHeader
     */
    public function getHeader(): VoucherHeader
    {
        return $this->header;
    }

    /**
     * @param VoucherHeader $header
     * @return Voucher
     */
    public function setHeader(VoucherHeader $header): Voucher
    {
        $this->header = $header;
        return $this;
    }

    /**
     * @return VoucherItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param VoucherItem $item
     * @return Voucher
     */
    public function addItem(VoucherItem $item): Voucher
    {
        $this->items[] = $item;
        return $this;
    }
}
