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
namespace _PhpScoperdd9048e10aae\SebastianBergmann\Diff;

use _PhpScoperdd9048e10aae\PHPUnit\Framework\TestCase;
/**
 * @covers SebastianBergmann\Diff\Chunk
 */
final class ChunkTest extends \_PhpScoperdd9048e10aae\PHPUnit\Framework\TestCase
{
    /**
     * @var Chunk
     */
    private $chunk;
    protected function setUp() : void
    {
        $this->chunk = new \_PhpScoperdd9048e10aae\SebastianBergmann\Diff\Chunk();
    }
    public function testHasInitiallyNoLines() : void
    {
        $this->assertSame([], $this->chunk->getLines());
    }
    public function testCanBeCreatedWithoutArguments() : void
    {
        $this->assertInstanceOf(\_PhpScoperdd9048e10aae\SebastianBergmann\Diff\Chunk::class, $this->chunk);
    }
    public function testStartCanBeRetrieved() : void
    {
        $this->assertSame(0, $this->chunk->getStart());
    }
    public function testStartRangeCanBeRetrieved() : void
    {
        $this->assertSame(1, $this->chunk->getStartRange());
    }
    public function testEndCanBeRetrieved() : void
    {
        $this->assertSame(0, $this->chunk->getEnd());
    }
    public function testEndRangeCanBeRetrieved() : void
    {
        $this->assertSame(1, $this->chunk->getEndRange());
    }
    public function testLinesCanBeRetrieved() : void
    {
        $this->assertSame([], $this->chunk->getLines());
    }
    public function testLinesCanBeSet() : void
    {
        $lines = [new \_PhpScoperdd9048e10aae\SebastianBergmann\Diff\Line(\_PhpScoperdd9048e10aae\SebastianBergmann\Diff\Line::ADDED, 'added'), new \_PhpScoperdd9048e10aae\SebastianBergmann\Diff\Line(\_PhpScoperdd9048e10aae\SebastianBergmann\Diff\Line::REMOVED, 'removed')];
        $this->chunk->setLines($lines);
        $this->assertSame($lines, $this->chunk->getLines());
    }
}
