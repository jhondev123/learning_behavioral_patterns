<?php

namespace Jhonattan\BehavioralPatterns\Services;

use Jhonattan\BehavioralPatterns\Domain\Budget;
use Jhonattan\BehavioralPatterns\Domain\Interface\Tax;

class TaxCalculator
{
    public function calculate(Budget $budget, Tax $tax): float
    {
        return $tax->calculate($budget);
    }
}
