<?php

namespace BernskioldMedia\Fortnox;

use BernskioldMedia\Fortnox\Resources\AbsenceTransaction;
use BernskioldMedia\Fortnox\Resources\Account;
use BernskioldMedia\Fortnox\Resources\AccountChart;
use BernskioldMedia\Fortnox\Resources\Contract;
use BernskioldMedia\Fortnox\Resources\FinancialYear;
use BernskioldMedia\Fortnox\Resources\Invoice;
use BernskioldMedia\Fortnox\Resources\Sie;
use BernskioldMedia\Fortnox\Resources\SupplierInvoice;

class Fortnox
{

    public function __construct(
        protected FortnoxClient $client
    ) {
    }

    public function absenceTransactions(): AbsenceTransaction
    {
        return new AbsenceTransaction($this->client);
    }

    public function accounts(): Account
    {
        return new Account($this->client);
    }

    public function accountCharts(): AccountChart
    {
        return new AccountChart($this->client);
    }

    public function contracts(): Contract
    {
        return new Contract($this->client);
    }

    public function financialYears(): FinancialYear
    {
        return new FinancialYear($this->client);
    }

    public function invoices(): Invoice
    {
        return new Invoice($this->client);
    }

    public function sie(): Sie
    {
        return new Sie($this->client);
    }

    public function supplierInvoices(): SupplierInvoice
    {
        return new SupplierInvoice($this->client);
    }

}
