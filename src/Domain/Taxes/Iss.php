<?php

namespace Jhonattan\BehavioralPatterns\Domain\Taxes;

use Jhonattan\BehavioralPatterns\Domain\Budget;
use Jhonattan\BehavioralPatterns\Domain\Interface\Tax;

class Iss implements Tax
{
    public function calculate(Budget $bugdet): float
    {
        return $bugdet->value * 0.06;
    }

}
