<?php

require_once __DIR__ . "/vendor/autoload.php";

use Jhonattan\BehavioralPatterns\Domain\Budget;
use Jhonattan\BehavioralPatterns\Domain\Taxes\Icms;
use Jhonattan\BehavioralPatterns\Services\TaxCalculator;
use Jhonattan\BehavioralPatterns\Services\DiscountCalculator;

$budget = new Budget();
$budget->value = 1000;
$budget->totalItems = 5;


// Strategy 


// $taxCalculator = new TaxCalculator();

// $icmsTax = $taxCalculator->calculate($budget, new Icms());
// var_dump($icmsTax);


// Chain of Responsibility
// $discountCalculator = new DiscountCalculator();
// $discount = $discountCalculator->calculateDescount($budget);
// var_dump($discount);
