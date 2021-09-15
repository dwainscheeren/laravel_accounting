<?php
namespace Dvb\Accounting;

class AccountingMutationLine {
    /**
     * @var float   The line amount without vat
     */
    protected float $amount = 0;
    protected float $amount_excl_vat = 0.0;
    protected float $vat_amount = 0.0;
    protected float $amount_incl_vat = 0.0;
    protected string $vat_code = '';
    protected float $vat_percentage = 0;
    protected ?string $invoice_number = null;
    protected ?string $ledger_code = null;
    protected int $cost_placement_id = 0;
    
    /**
     * Get the amount without vat
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return AccountingMutationLine
     */
    public function setAmount(float $amount): AccountingMutationLine
    {
        $this->amount = $amount;
        return $this;
    }


    /**
     * Get the amount without vat
     * @return float
     */
    public function getAmountExclVat(): float
    {
        return $this->amount_excl_vat;
    }

    /**
     * @param float $amount_excl_vat
     * @return EboekhoudenMutationLine
     */
    public function setAmountExclVat(float $amount_excl_vat): AccountingMutationLine
    {
        $this->amount_excl_vat = $amount_excl_vat;

        return $this;
    }

    /**
     * Get the amount without vat
     * @return float
     */
    public function getVatAmount(): float
    {
        return $this->vat_amount;
    }

    /**
     * @param float $vat_amount
     * @return EboekhoudenMutationLine
     */
    public function setVatAmount(float $vat_amount): AccountingMutationLine
    {
        $this->vat_amount = $vat_amount;

        return $this;
    }

    /**
     * Get the amount without vat
     * @return float
     */
    public function getAmountInclVat(): float
    {
        return $this->amount_incl_vat;
    }

    /**
     * @param float $amount_incl_vat
     * @return EboekhoudenMutationLine
     */
    public function setAmountInclVat(float $amount_incl_vat): AccountingMutationLine
    {
        $this->amount_incl_vat = $amount_incl_vat;

        return $this;
    }

    /**
     * @return string
     */
    public function getVatCode(): string
    {
        return $this->vat_code;
    }

    /**
     * @param string $vat_code
     * @return AccountingMutationLine
     */
    public function setVatCode(string $vat_code): AccountingMutationLine
    {
        $this->vat_code = $vat_code;
        return $this;
    }

    /**
     * @return float
     */
    public function getVatPercentage(): float
    {
        return $this->vat_percentage;
    }

    /**
     * @param float $vat_percentage
     * @return AccountingMutationLine
     */
    public function setVatPercentage(float $vat_percentage): AccountingMutationLine
    {
        $this->vat_percentage = $vat_percentage;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInvoiceNumber(): ?string
    {
        return $this->invoice_number;
    }

    /**
     * @param string|null $invoice_number
     * @return AccountingMutationLine
     */
    public function setInvoiceNumber(?string $invoice_number): AccountingMutationLine
    {
        $this->invoice_number = $invoice_number;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLedgerCode(): ?string
    {
        return $this->ledger_code;
    }

    /**
     * @param string|null $ledger_code
     * @return AccountingMutationLine
     */
    public function setLedgerCode(?string $ledger_code): AccountingMutationLine
    {
        $this->ledger_code = $ledger_code;
        return $this;
    }

    /**
     * @return int
     */
    public function getCostPlacementId(): int
    {
        return $this->cost_placement_id;
    }

    /**
     * @param int $cost_placement_id
     * @return EboekhoudenMutationLine
     */
    public function setCostPlacementId(int $cost_placement_id): AccountingMutationLine
    {
        $this->cost_placement_id = $cost_placement_id;

        return $this;
    }
}
