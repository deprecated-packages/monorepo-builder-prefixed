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
namespace _PhpScoper1ff8e175c295\SebastianBergmann\Diff\Output;

use _PhpScoper1ff8e175c295\PHPUnit\Framework\TestCase;
use _PhpScoper1ff8e175c295\SebastianBergmann\Diff\Differ;
/**
 * @covers SebastianBergmann\Diff\Output\DiffOnlyOutputBuilder
 *
 * @uses SebastianBergmann\Diff\Differ
 * @uses SebastianBergmann\Diff\TimeEfficientLongestCommonSubsequenceCalculator
 */
final class DiffOnlyOutputBuilderTest extends \_PhpScoper1ff8e175c295\PHPUnit\Framework\TestCase
{
    /**
     * @param string $expected
     * @param string $from
     * @param string $to
     * @param string $header
     *
     * @dataProvider textForNoNonDiffLinesProvider
     */
    public function testDiffDoNotShowNonDiffLines(string $expected, string $from, string $to, string $header = '') : void
    {
        $differ = new \_PhpScoper1ff8e175c295\SebastianBergmann\Diff\Differ(new \_PhpScoper1ff8e175c295\SebastianBergmann\Diff\Output\DiffOnlyOutputBuilder($header));
        $this->assertSame($expected, $differ->diff($from, $to));
    }
    public function textForNoNonDiffLinesProvider() : array
    {
        return [[" #Warning: Strings contain different line endings!\n-A\r\n+B\n", "A\r\n", "B\n"], ["-A\n+B\n", "\nA", "\nB"], ['', 'a', 'a'], ["-A\n+C\n", "A\n\n\nB", "C\n\n\nB"], ["header\n", 'a', 'a', 'header'], ["header\n", 'a', 'a', "header\n"]];
    }
}
