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
namespace _PhpScoperfd1a6a0ee9af\SebastianBergmann\Diff;

use _PhpScoperfd1a6a0ee9af\PHPUnit\Framework\TestCase;
/**
 * @covers SebastianBergmann\Diff\Diff
 *
 * @uses SebastianBergmann\Diff\Chunk
 */
final class DiffTest extends \_PhpScoperfd1a6a0ee9af\PHPUnit\Framework\TestCase
{
    public function testGettersAfterConstructionWithDefault() : void
    {
        $from = 'line1a';
        $to = 'line2a';
        $diff = new \_PhpScoperfd1a6a0ee9af\SebastianBergmann\Diff\Diff($from, $to);
        $this->assertSame($from, $diff->getFrom());
        $this->assertSame($to, $diff->getTo());
        $this->assertSame([], $diff->getChunks(), 'Expect chunks to be default value "array()".');
    }
    public function testGettersAfterConstructionWithChunks() : void
    {
        $from = 'line1b';
        $to = 'line2b';
        $chunks = [new \_PhpScoperfd1a6a0ee9af\SebastianBergmann\Diff\Chunk(), new \_PhpScoperfd1a6a0ee9af\SebastianBergmann\Diff\Chunk(2, 3)];
        $diff = new \_PhpScoperfd1a6a0ee9af\SebastianBergmann\Diff\Diff($from, $to, $chunks);
        $this->assertSame($from, $diff->getFrom());
        $this->assertSame($to, $diff->getTo());
        $this->assertSame($chunks, $diff->getChunks(), 'Expect chunks to be passed value.');
    }
    public function testSetChunksAfterConstruction() : void
    {
        $diff = new \_PhpScoperfd1a6a0ee9af\SebastianBergmann\Diff\Diff('line1c', 'line2c');
        $this->assertSame([], $diff->getChunks(), 'Expect chunks to be default value "array()".');
        $chunks = [new \_PhpScoperfd1a6a0ee9af\SebastianBergmann\Diff\Chunk(), new \_PhpScoperfd1a6a0ee9af\SebastianBergmann\Diff\Chunk(2, 3)];
        $diff->setChunks($chunks);
        $this->assertSame($chunks, $diff->getChunks(), 'Expect chunks to be passed value.');
    }
}
