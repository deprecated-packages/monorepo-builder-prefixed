<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper8f797d20934a\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoper8f797d20934a\PHPUnit\Framework\TestCase;
use _PhpScoper8f797d20934a\Symfony\Component\Mime\Message;
use _PhpScoper8f797d20934a\Symfony\Component\Mime\Part\MessagePart;
use _PhpScoper8f797d20934a\Symfony\Component\Mime\Part\Multipart\DigestPart;
class DigestPartTest extends \_PhpScoper8f797d20934a\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScoper8f797d20934a\Symfony\Component\Mime\Part\Multipart\DigestPart($a = new \_PhpScoper8f797d20934a\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoper8f797d20934a\Symfony\Component\Mime\Message()), $b = new \_PhpScoper8f797d20934a\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoper8f797d20934a\Symfony\Component\Mime\Message()));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('digest', $r->getMediaSubtype());
        $this->assertEquals([$a, $b], $r->getParts());
    }
}
