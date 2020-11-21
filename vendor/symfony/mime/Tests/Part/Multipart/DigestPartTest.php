<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdbf49b510e11\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoperdbf49b510e11\PHPUnit\Framework\TestCase;
use _PhpScoperdbf49b510e11\Symfony\Component\Mime\Message;
use _PhpScoperdbf49b510e11\Symfony\Component\Mime\Part\MessagePart;
use _PhpScoperdbf49b510e11\Symfony\Component\Mime\Part\Multipart\DigestPart;
class DigestPartTest extends \_PhpScoperdbf49b510e11\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScoperdbf49b510e11\Symfony\Component\Mime\Part\Multipart\DigestPart($a = new \_PhpScoperdbf49b510e11\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperdbf49b510e11\Symfony\Component\Mime\Message()), $b = new \_PhpScoperdbf49b510e11\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperdbf49b510e11\Symfony\Component\Mime\Message()));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('digest', $r->getMediaSubtype());
        $this->assertEquals([$a, $b], $r->getParts());
    }
}
