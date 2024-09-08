<?php

namespace Jhonattan\BehavioralPatterns\Domain\Taxes;

use Jhonattan\BehavioralPatterns\Domain\Budget;
use Jhonattan\BehavioralPatterns\Domain\Interface\Tax;

abstract class TaxWith2Aliquotes implements Tax
{
    public function calculate(Budget $budget): float
    {
        if ($this->applyMaxTax($budget)) {
            return  $this->calculateMaxTax($budget);
        }
        return  $this->calculateMinTax($budget);
    }
    abstract protected function applyMaxTax(Budget $budget): bool;
    abstract protected function calculateMaxTax(Budget $budget): float;
    abstract protected function calculateMinTax(Budget $budget): float;
}
