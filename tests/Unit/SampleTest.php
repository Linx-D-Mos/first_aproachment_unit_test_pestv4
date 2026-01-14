<?php

test('check that the value is true', function () {
    expect("Zura")
    ->toBeString()
    ->toContain('Z')
    ->not
    ->toContain('z')
    ->not
    ->toBeInt();

    expect([1,2,3])
    ->toBeArray()
    ->toContain(2)
    ->toHaveCount(3);
});
