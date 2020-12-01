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
namespace _PhpScoperd8a347ec1761\SebastianBergmann\Diff;

/**
 * @covers SebastianBergmann\Diff\TimeEfficientLongestCommonSubsequenceCalculator
 */
final class TimeEfficientImplementationTest extends \_PhpScoperd8a347ec1761\SebastianBergmann\Diff\LongestCommonSubsequenceTest
{
    protected function createImplementation() : \_PhpScoperd8a347ec1761\SebastianBergmann\Diff\LongestCommonSubsequenceCalculator
    {
        return new \_PhpScoperd8a347ec1761\SebastianBergmann\Diff\TimeEfficientLongestCommonSubsequenceCalculator();
    }
}
