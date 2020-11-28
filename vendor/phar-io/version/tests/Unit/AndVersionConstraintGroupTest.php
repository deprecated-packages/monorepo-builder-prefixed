<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbe77f3b0e77d\PharIo\Version;

use _PhpScoperbe77f3b0e77d\PHPUnit\Framework\TestCase;
/**
 * @covers \PharIo\Version\AndVersionConstraintGroup
 */
class AndVersionConstraintGroupTest extends \_PhpScoperbe77f3b0e77d\PHPUnit\Framework\TestCase
{
    public function testReturnsFalseIfOneConstraintReturnsFalse()
    {
        $firstConstraint = $this->createMock(\_PhpScoperbe77f3b0e77d\PharIo\Version\VersionConstraint::class);
        $secondConstraint = $this->createMock(\_PhpScoperbe77f3b0e77d\PharIo\Version\VersionConstraint::class);
        $firstConstraint->expects($this->once())->method('complies')->will($this->returnValue(\true));
        $secondConstraint->expects($this->once())->method('complies')->will($this->returnValue(\false));
        $group = new \_PhpScoperbe77f3b0e77d\PharIo\Version\AndVersionConstraintGroup('foo', [$firstConstraint, $secondConstraint]);
        $this->assertFalse($group->complies(new \_PhpScoperbe77f3b0e77d\PharIo\Version\Version('1.0.0')));
    }
    public function testReturnsTrueIfAllConstraintsReturnsTrue()
    {
        $firstConstraint = $this->createMock(\_PhpScoperbe77f3b0e77d\PharIo\Version\VersionConstraint::class);
        $secondConstraint = $this->createMock(\_PhpScoperbe77f3b0e77d\PharIo\Version\VersionConstraint::class);
        $firstConstraint->expects($this->once())->method('complies')->will($this->returnValue(\true));
        $secondConstraint->expects($this->once())->method('complies')->will($this->returnValue(\true));
        $group = new \_PhpScoperbe77f3b0e77d\PharIo\Version\AndVersionConstraintGroup('foo', [$firstConstraint, $secondConstraint]);
        $this->assertTrue($group->complies(new \_PhpScoperbe77f3b0e77d\PharIo\Version\Version('1.0.0')));
    }
}
