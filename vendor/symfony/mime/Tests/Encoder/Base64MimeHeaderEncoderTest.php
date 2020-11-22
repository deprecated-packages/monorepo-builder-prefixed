<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper29aa9f1ba53d\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoper29aa9f1ba53d\PHPUnit\Framework\TestCase;
use _PhpScoper29aa9f1ba53d\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoper29aa9f1ba53d\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoper29aa9f1ba53d\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
