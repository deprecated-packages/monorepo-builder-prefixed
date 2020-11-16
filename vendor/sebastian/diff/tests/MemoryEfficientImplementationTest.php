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
namespace _PhpScoperb1086ecf2bcb\SebastianBergmann\Diff;

/**
 * @covers SebastianBergmann\Diff\MemoryEfficientLongestCommonSubsequenceCalculator
 */
final class MemoryEfficientImplementationTest extends \_PhpScoperb1086ecf2bcb\SebastianBergmann\Diff\LongestCommonSubsequenceTest
{
    protected function createImplementation() : \_PhpScoperb1086ecf2bcb\SebastianBergmann\Diff\LongestCommonSubsequenceCalculator
    {
        return new \_PhpScoperb1086ecf2bcb\SebastianBergmann\Diff\MemoryEfficientLongestCommonSubsequenceCalculator();
    }
}
