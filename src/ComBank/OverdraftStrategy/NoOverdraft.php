<?php

namespace ComBank\OverdraftStrategy;

use ComBank\OverdraftStrategy\Contracts\OverdraftInterface;

/**
 * Created by VS Code.
 * User: JPortugal
 * Date: 7/28/24
 * Time: 12:27 PM
 */

class NoOverdraft implements OverdraftInterface
{
    public function isGrantOverDraftFunds(float $newAmount): bool
    {
        return ($this->getOverDraftFundsAmount() + $newAmount) >= 0;
    }
    public function getOverDraftFundsAmount(): float
    {
        return 0.0;
    }
}
