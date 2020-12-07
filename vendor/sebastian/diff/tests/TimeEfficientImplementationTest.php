<?php

declare (strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercd5c1af09a49\SebastianBergmann\Diff;

/**
 * @covers SebastianBergmann\Diff\TimeEfficientLongestCommonSubsequenceCalculator
 */
final class TimeEfficientImplementationTest extends \_PhpScopercd5c1af09a49\SebastianBergmann\Diff\LongestCommonSubsequenceTest
{
    protected function createImplementation() : \_PhpScopercd5c1af09a49\SebastianBergmann\Diff\LongestCommonSubsequenceCalculator
    {
        return new \_PhpScopercd5c1af09a49\SebastianBergmann\Diff\TimeEfficientLongestCommonSubsequenceCalculator();
    }
}
