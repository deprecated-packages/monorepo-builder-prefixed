<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbc89827b806f\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperbc89827b806f\PHPUnit\Framework\TestCase;
use _PhpScoperbc89827b806f\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperbc89827b806f\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperbc89827b806f\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
