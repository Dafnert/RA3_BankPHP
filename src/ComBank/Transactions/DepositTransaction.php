<?php

namespace ComBank\Transactions;

/**
 * Created by VS Code.
 * User: JPortugal
 * Date: 7/28/24
 * Time: 11:30 AM
 */

use ComBank\Bank\Contracts\BankAccountInterface;
use ComBank\Transactions\Contracts\BankTransactionInterface;

class DepositTransaction extends BaseTransaction implements BankTransactionInterface
{
    public function applyTransaction(BankAccountInterface $bankAccountInterface): float {
        // 400+150
        return $bankAccountInterface->getBalance() + $this->amount;
    }
    public function getAmount(): float
    {
        // Nos dará el monto
        return $this->amount;
    }
    public function getTransactionInfo(): string{
        return 'DEPOSIT_TRANSACTION';
    }
}