<?php

namespace Jhonattan\BehavioralPatterns\Domain\Interface;

use Jhonattan\BehavioralPatterns\Domain\Budget;

interface Tax
{
    public function calculate(Budget $bugdet): float;
}
