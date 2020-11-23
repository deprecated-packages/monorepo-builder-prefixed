<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc9dc9dec1b4a\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperc9dc9dec1b4a\PHPUnit\Framework\TestCase;
use _PhpScoperc9dc9dec1b4a\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperc9dc9dec1b4a\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperc9dc9dec1b4a\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
