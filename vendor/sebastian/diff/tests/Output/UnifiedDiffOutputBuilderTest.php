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
namespace _PhpScoper3a1deaf87850\SebastianBergmann\Diff\Output;

use _PhpScoper3a1deaf87850\PHPUnit\Framework\TestCase;
use _PhpScoper3a1deaf87850\SebastianBergmann\Diff\Differ;
/**
 * @covers SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder
 *
 * @uses SebastianBergmann\Diff\Differ
 * @uses SebastianBergmann\Diff\Output\AbstractChunkOutputBuilder
 * @uses SebastianBergmann\Diff\TimeEfficientLongestCommonSubsequenceCalculator
 */
final class UnifiedDiffOutputBuilderTest extends \_PhpScoper3a1deaf87850\PHPUnit\Framework\TestCase
{
    /**
     * @param string $expected
     * @param string $from
     * @param string $to
     * @param string $header
     *
     * @dataProvider headerProvider
     */
    public function testCustomHeaderCanBeUsed(string $expected, string $from, string $to, string $header) : void
    {
        $differ = new \_PhpScoper3a1deaf87850\SebastianBergmann\Diff\Differ(new \_PhpScoper3a1deaf87850\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder($header));
        $this->assertSame($expected, $differ->diff($from, $to));
    }
    public function headerProvider() : array
    {
        return [["CUSTOM HEADER\n@@ @@\n-a\n+b\n", 'a', 'b', 'CUSTOM HEADER'], ["CUSTOM HEADER\n@@ @@\n-a\n+b\n", 'a', 'b', "CUSTOM HEADER\n"], ["CUSTOM HEADER\n\n@@ @@\n-a\n+b\n", 'a', 'b', "CUSTOM HEADER\n\n"], ["@@ @@\n-a\n+b\n", 'a', 'b', '']];
    }
    /**
     * @param string $expected
     * @param string $from
     * @param string $to
     *
     * @dataProvider provideDiffWithLineNumbers
     */
    public function testDiffWithLineNumbers($expected, $from, $to) : void
    {
        $differ = new \_PhpScoper3a1deaf87850\SebastianBergmann\Diff\Differ(new \_PhpScoper3a1deaf87850\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder("--- Original\n+++ New\n", \true));
        $this->assertSame($expected, $differ->diff($from, $to));
    }
    public function provideDiffWithLineNumbers() : array
    {
        return \_PhpScoper3a1deaf87850\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilderDataProvider::provideDiffWithLineNumbers();
    }
}
