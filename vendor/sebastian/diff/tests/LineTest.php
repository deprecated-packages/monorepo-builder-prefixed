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
namespace _PhpScopera2ff5fd2b59c\SebastianBergmann\Diff;

use _PhpScopera2ff5fd2b59c\PHPUnit\Framework\TestCase;
/**
 * @covers SebastianBergmann\Diff\Line
 */
final class LineTest extends \_PhpScopera2ff5fd2b59c\PHPUnit\Framework\TestCase
{
    /**
     * @var Line
     */
    private $line;
    protected function setUp() : void
    {
        $this->line = new \_PhpScopera2ff5fd2b59c\SebastianBergmann\Diff\Line();
    }
    public function testCanBeCreatedWithoutArguments() : void
    {
        $this->assertInstanceOf(\_PhpScopera2ff5fd2b59c\SebastianBergmann\Diff\Line::class, $this->line);
    }
    public function testTypeCanBeRetrieved() : void
    {
        $this->assertSame(\_PhpScopera2ff5fd2b59c\SebastianBergmann\Diff\Line::UNCHANGED, $this->line->getType());
    }
    public function testContentCanBeRetrieved() : void
    {
        $this->assertSame('', $this->line->getContent());
    }
}
