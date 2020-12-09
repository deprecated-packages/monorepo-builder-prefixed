<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera85504f0ea7b\Symfony\Component\Mime\Tests\Encoder;

use _PhpScopera85504f0ea7b\PHPUnit\Framework\TestCase;
use _PhpScopera85504f0ea7b\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScopera85504f0ea7b\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScopera85504f0ea7b\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
