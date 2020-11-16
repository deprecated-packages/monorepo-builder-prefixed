<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperafeb7177e88e\PharIo\Version;

use _PhpScoperafeb7177e88e\PHPUnit\Framework\TestCase;
/**
 * @covers \PharIo\Version\AbstractVersionConstraint
 */
class AbstractVersionConstraintTest extends \_PhpScoperafeb7177e88e\PHPUnit\Framework\TestCase
{
    public function testAsString()
    {
        /** @var AbstractVersionConstraint|\PHPUnit_Framework_MockObject_MockObject $constraint */
        $constraint = $this->getMockForAbstractClass(\_PhpScoperafeb7177e88e\PharIo\Version\AbstractVersionConstraint::class, ['foo']);
        $this->assertSame('foo', $constraint->asString());
    }
}
