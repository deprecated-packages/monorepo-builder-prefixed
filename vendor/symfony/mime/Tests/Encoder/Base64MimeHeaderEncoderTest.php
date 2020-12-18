<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera1d8e0344ecf\Symfony\Component\Mime\Tests\Encoder;

use _PhpScopera1d8e0344ecf\PHPUnit\Framework\TestCase;
use _PhpScopera1d8e0344ecf\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScopera1d8e0344ecf\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScopera1d8e0344ecf\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
