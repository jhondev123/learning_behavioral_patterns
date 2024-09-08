<?php

namespace Jhonattan\BehavioralPatterns\Domain\Discounts;

use Jhonattan\BehavioralPatterns\Domain\Budget;

class DiscountForMoreThan500Value extends Discount
{
    public function calculate(?Budget $budget): float
    {
        if ($budget->value > 500) {
            return $budget->value * 0.05;
        }
        return $this->next->calculate($budget);
    }
}
