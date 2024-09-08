<?php

namespace Jhonattan\BehavioralPatterns\Domain\Discounts;

use Jhonattan\BehavioralPatterns\Domain\Budget;

class DiscountForMoreThan5Items extends Discount
{
    public function calculate(?Budget $budget):float
    {
        if ($budget->totalItems > 5) {
            return $budget->value* 0.1;
        }
        return $this->next->calculate($budget);
    }
}
