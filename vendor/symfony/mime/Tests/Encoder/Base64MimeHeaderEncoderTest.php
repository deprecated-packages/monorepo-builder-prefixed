<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperff72c38d4e2a\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperff72c38d4e2a\PHPUnit\Framework\TestCase;
use _PhpScoperff72c38d4e2a\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperff72c38d4e2a\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperff72c38d4e2a\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
