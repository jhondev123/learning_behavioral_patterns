<?php

namespace Jhonattan\BehavioralPatterns\Domain\Taxes;

use Jhonattan\BehavioralPatterns\Domain\Budget;
use Jhonattan\BehavioralPatterns\Domain\Interface\Tax;

class Ikcv extends TaxWith2Aliquotes
{

    protected function applyMaxTax(Budget $bugdet): bool
    {
        return $bugdet->value > 500 && $bugdet->totalItems > 5;
    }
    protected function calculateMaxTax(Budget $bugdet): float
    {
        return $bugdet->value * 0.04;
    }
    protected function calculateMinTax(Budget $bugdet): float
    {
        return $bugdet->value * 0.025;
    }
}
