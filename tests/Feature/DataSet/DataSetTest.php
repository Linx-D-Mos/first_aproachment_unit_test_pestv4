<?php

it('add numbers', function ($a, $b, $c) {
    expect($a + $b)
        ->toBe($c);
})->with([           // <--- Abre array principal
    [1, 2, 3],       // Set 1
    [5, 7, 12]       // Set 2
])->only();