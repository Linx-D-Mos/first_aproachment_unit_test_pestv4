<?php

use App\Services\PriceCalculator;


describe("PriceCalculator - Percentage Discount", function () {
    it('applies Percentage Discount ', function () {
        $calc = new PriceCalculator();
        expect($calc->applyPercentageDiscount(100, 20))
            ->toBe(80.0);
    });
    it('round discounted price', function () {
        $calc = new PriceCalculator();
        expect($calc->applyPercentageDiscount(100, 12.345))
            ->toBe(87.66);
    });
    it('throw invalidArgument when discount is negative', function () {
        $calc = new PriceCalculator();
        expect(fn() => $calc->applyPercentageDiscount(100, -12))
            ->toThrow(InvalidArgumentException::class, 'Invalid discount percent');
    });
});

describe("PriceCalculator - Fixed Discount", function(){
    it('aplies fixed discount', function(){
        $calc = new PriceCalculator();
        expect($calc->applyFixedDiscount(100,20))
        ->toBe(80.0);
    });
    it('never return a negative price', function() {
        $calc = new PriceCalculator();
        expect($calc->applyFixedDiscount(50,100))
        ->toBe(0.00);
    });
    it('trhow for negative fixed amount', function(){
        $calc = new PriceCalculator();
        expect(fn() => $calc->applyFixedDiscount(100,-20))
        ->toThrow(InvalidArgumentException::class, 'Invalid discount amount');
    });
});

describe("PriceCalculator - Add Tax & Final Price", function(){
    
    it('adds tax to the price', function(){
        $calc = new PriceCalculator();
        expect($calc->addTax(100,19))
        ->toBe(119.00);
    });
    it('rounds taxed price', function(){
        $calc = new PriceCalculator();
        expect($calc->addTax(100,18.333))
        ->toBe(118.33);
    });
    it('Calculates final price with discount and tax', function(){
        $calc = new PriceCalculator();
        expect($calc->finalPrice(100,10,19))
        ->toBe(107.10);
    });

});