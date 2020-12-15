<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd79f30a2f8be\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperd79f30a2f8be\PHPUnit\Framework\TestCase;
use _PhpScoperd79f30a2f8be\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperd79f30a2f8be\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperd79f30a2f8be\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
