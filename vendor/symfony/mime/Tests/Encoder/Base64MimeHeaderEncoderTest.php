<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd659a053ca1c\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperd659a053ca1c\PHPUnit\Framework\TestCase;
use _PhpScoperd659a053ca1c\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperd659a053ca1c\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperd659a053ca1c\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
