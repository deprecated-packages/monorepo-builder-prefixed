<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfdd2db5e123d\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperfdd2db5e123d\PHPUnit\Framework\TestCase;
use _PhpScoperfdd2db5e123d\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperfdd2db5e123d\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
