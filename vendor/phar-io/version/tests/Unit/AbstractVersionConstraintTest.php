<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper61d2aa534566\PharIo\Version;

use _PhpScoper61d2aa534566\PHPUnit\Framework\TestCase;
/**
 * @covers \PharIo\Version\AbstractVersionConstraint
 */
class AbstractVersionConstraintTest extends \_PhpScoper61d2aa534566\PHPUnit\Framework\TestCase
{
    public function testAsString()
    {
        /** @var AbstractVersionConstraint|\PHPUnit_Framework_MockObject_MockObject $constraint */
        $constraint = $this->getMockForAbstractClass(\_PhpScoper61d2aa534566\PharIo\Version\AbstractVersionConstraint::class, ['foo']);
        $this->assertSame('foo', $constraint->asString());
    }
}
