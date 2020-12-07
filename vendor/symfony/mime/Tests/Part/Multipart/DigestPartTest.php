<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdab52924cf3e\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoperdab52924cf3e\PHPUnit\Framework\TestCase;
use _PhpScoperdab52924cf3e\Symfony\Component\Mime\Message;
use _PhpScoperdab52924cf3e\Symfony\Component\Mime\Part\MessagePart;
use _PhpScoperdab52924cf3e\Symfony\Component\Mime\Part\Multipart\DigestPart;
class DigestPartTest extends \_PhpScoperdab52924cf3e\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScoperdab52924cf3e\Symfony\Component\Mime\Part\Multipart\DigestPart($a = new \_PhpScoperdab52924cf3e\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperdab52924cf3e\Symfony\Component\Mime\Message()), $b = new \_PhpScoperdab52924cf3e\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperdab52924cf3e\Symfony\Component\Mime\Message()));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('digest', $r->getMediaSubtype());
        $this->assertEquals([$a, $b], $r->getParts());
    }
}
