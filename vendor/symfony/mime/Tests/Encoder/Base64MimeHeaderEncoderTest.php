<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc1a0b7b3175f\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperc1a0b7b3175f\PHPUnit\Framework\TestCase;
use _PhpScoperc1a0b7b3175f\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperc1a0b7b3175f\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperc1a0b7b3175f\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
