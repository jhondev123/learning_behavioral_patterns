<?php

require_once __DIR__ . "/vendor/autoload.php";

use Jhonattan\BehavioralPatterns\Domain\Budget;
use Jhonattan\BehavioralPatterns\Services\TaxCalculator;

$budget = new Budget();
$budget->value = 1000;

$taxCalculator = new TaxCalculator();

$icmsTax = $taxCalculator->calculate($budget, 'ICMS');
var_dump($icmsTax);
