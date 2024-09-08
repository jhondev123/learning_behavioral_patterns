<?php

namespace Jhonattan\BehavioralPatterns\Domain\Taxes;

use Jhonattan\BehavioralPatterns\Domain\Budget;
use Jhonattan\BehavioralPatterns\Domain\Interface\Tax;

class Icpp extends TaxWith2Aliquotes
{

    protected function applyMaxTax(Budget $budget): bool
    {
        return $budget->value > 500;
    }
    protected function calculateMaxTax(Budget $budget): float
    {
        return $budget->value * 0.03;
    }
    protected function calculateMinTax(Budget $budget): float
    {
        return $budget->value * 0.02;
    }
}
