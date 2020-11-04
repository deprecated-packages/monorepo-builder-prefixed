<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperce084f4275dd\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperce084f4275dd\PHPUnit\Framework\TestCase;
use _PhpScoperce084f4275dd\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperce084f4275dd\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperce084f4275dd\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
