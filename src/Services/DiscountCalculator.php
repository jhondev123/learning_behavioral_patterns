<?php

namespace Jhonattan\BehavioralPatterns\Services;

use Jhonattan\BehavioralPatterns\Domain\Budget;
use Jhonattan\BehavioralPatterns\Domain\Discounts\DiscountForMoreThan5Items;
use Jhonattan\BehavioralPatterns\Domain\Discounts\DiscountForMoreThan500Value;
use Jhonattan\BehavioralPatterns\Domain\Discounts\WithoutDiscount;

class DiscountCalculator
{
    public function calculateDescount(Budget $budget): float
    {
        $discount = 0;
        $discountChain = new DiscountForMoreThan5Items(
            new DiscountForMoreThan500Value(
                new WithoutDiscount()
            )
        );
        $discount = $discountChain->calculate($budget);
        return $budget->value - $discount;

    }
}
