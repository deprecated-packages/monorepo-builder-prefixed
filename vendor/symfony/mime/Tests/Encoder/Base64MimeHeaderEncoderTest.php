<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb25e75e9febe\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperb25e75e9febe\PHPUnit\Framework\TestCase;
use _PhpScoperb25e75e9febe\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperb25e75e9febe\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperb25e75e9febe\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
