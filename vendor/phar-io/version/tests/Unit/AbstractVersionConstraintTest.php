<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb1086ecf2bcb\PharIo\Version;

use _PhpScoperb1086ecf2bcb\PHPUnit\Framework\TestCase;
/**
 * @covers \PharIo\Version\AbstractVersionConstraint
 */
class AbstractVersionConstraintTest extends \_PhpScoperb1086ecf2bcb\PHPUnit\Framework\TestCase
{
    public function testAsString()
    {
        /** @var AbstractVersionConstraint|\PHPUnit_Framework_MockObject_MockObject $constraint */
        $constraint = $this->getMockForAbstractClass(\_PhpScoperb1086ecf2bcb\PharIo\Version\AbstractVersionConstraint::class, ['foo']);
        $this->assertSame('foo', $constraint->asString());
    }
}
