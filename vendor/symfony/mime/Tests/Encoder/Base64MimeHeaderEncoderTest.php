<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbb737891eded\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperbb737891eded\PHPUnit\Framework\TestCase;
use _PhpScoperbb737891eded\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperbb737891eded\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperbb737891eded\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
