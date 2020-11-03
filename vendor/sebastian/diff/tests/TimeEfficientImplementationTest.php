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
namespace _PhpScoperf1163522a13e\SebastianBergmann\Diff;

/**
 * @covers SebastianBergmann\Diff\TimeEfficientLongestCommonSubsequenceCalculator
 */
final class TimeEfficientImplementationTest extends \_PhpScoperf1163522a13e\SebastianBergmann\Diff\LongestCommonSubsequenceTest
{
    protected function createImplementation() : \_PhpScoperf1163522a13e\SebastianBergmann\Diff\LongestCommonSubsequenceCalculator
    {
        return new \_PhpScoperf1163522a13e\SebastianBergmann\Diff\TimeEfficientLongestCommonSubsequenceCalculator();
    }
}
