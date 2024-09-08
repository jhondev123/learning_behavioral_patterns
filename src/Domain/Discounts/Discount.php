<?php

namespace Jhonattan\BehavioralPatterns\Domain\Discounts;

use Jhonattan\BehavioralPatterns\Domain\Budget;

abstract class Discount
{
    public function __construct(protected ?Discount $next)
    {
        
    }
    abstract public function calculate(Budget $budget): float;

}
