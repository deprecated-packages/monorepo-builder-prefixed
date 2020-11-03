<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper472361b15529\PharIo\Version;

use _PhpScoper472361b15529\PHPUnit\Framework\TestCase;
/**
 * @covers \PharIo\Version\AbstractVersionConstraint
 */
class AbstractVersionConstraintTest extends \_PhpScoper472361b15529\PHPUnit\Framework\TestCase
{
    public function testAsString()
    {
        /** @var AbstractVersionConstraint|\PHPUnit_Framework_MockObject_MockObject $constraint */
        $constraint = $this->getMockForAbstractClass(\_PhpScoper472361b15529\PharIo\Version\AbstractVersionConstraint::class, ['foo']);
        $this->assertSame('foo', $constraint->asString());
    }
}