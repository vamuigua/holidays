<?php

expect()->extend('toContainElement', function (Closure $closure) {
    foreach ($this->value as $actualSubarray) {
        if ($closure($actualSubarray)) {
            expect(true)->toBeTrue();

            return;
        }
    }

    test()->fail('Failed asserting that the array contains the expected subarray.');
});
