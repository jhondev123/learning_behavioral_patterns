<?php

namespace Jhonattan\BehavioralPatterns\Domain\Discounts;

use Jhonattan\BehavioralPatterns\Domain\Budget;

class WithoutDiscount extends Discount
{
    public function __construct()
    {
        parent::__construct(null);
    }
    public function calculate(Budget $budget): float
    {
        return 0;
    }
}
