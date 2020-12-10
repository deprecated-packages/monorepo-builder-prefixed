<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper53a6895b9c5b\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoper53a6895b9c5b\PHPUnit\Framework\TestCase;
use _PhpScoper53a6895b9c5b\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoper53a6895b9c5b\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoper53a6895b9c5b\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
