<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdd9048e10aae\PharIo\Version;

use _PhpScoperdd9048e10aae\PHPUnit\Framework\TestCase;
/**
 * @covers \PharIo\Version\OrVersionConstraintGroup
 */
class OrVersionConstraintGroupTest extends \_PhpScoperdd9048e10aae\PHPUnit\Framework\TestCase
{
    public function testReturnsTrueIfOneConstraintReturnsFalse()
    {
        $firstConstraint = $this->createMock(\_PhpScoperdd9048e10aae\PharIo\Version\VersionConstraint::class);
        $secondConstraint = $this->createMock(\_PhpScoperdd9048e10aae\PharIo\Version\VersionConstraint::class);
        $firstConstraint->expects($this->once())->method('complies')->will($this->returnValue(\false));
        $secondConstraint->expects($this->once())->method('complies')->will($this->returnValue(\true));
        $group = new \_PhpScoperdd9048e10aae\PharIo\Version\OrVersionConstraintGroup('foo', [$firstConstraint, $secondConstraint]);
        $this->assertTrue($group->complies(new \_PhpScoperdd9048e10aae\PharIo\Version\Version('1.0.0')));
    }
    public function testReturnsTrueIfAllConstraintsReturnsTrue()
    {
        $firstConstraint = $this->createMock(\_PhpScoperdd9048e10aae\PharIo\Version\VersionConstraint::class);
        $secondConstraint = $this->createMock(\_PhpScoperdd9048e10aae\PharIo\Version\VersionConstraint::class);
        $firstConstraint->expects($this->once())->method('complies')->will($this->returnValue(\true));
        $group = new \_PhpScoperdd9048e10aae\PharIo\Version\OrVersionConstraintGroup('foo', [$firstConstraint, $secondConstraint]);
        $this->assertTrue($group->complies(new \_PhpScoperdd9048e10aae\PharIo\Version\Version('1.0.0')));
    }
    public function testReturnsFalseIfAllConstraintsReturnsFalse()
    {
        $firstConstraint = $this->createMock(\_PhpScoperdd9048e10aae\PharIo\Version\VersionConstraint::class);
        $secondConstraint = $this->createMock(\_PhpScoperdd9048e10aae\PharIo\Version\VersionConstraint::class);
        $firstConstraint->expects($this->once())->method('complies')->will($this->returnValue(\false));
        $secondConstraint->expects($this->once())->method('complies')->will($this->returnValue(\false));
        $group = new \_PhpScoperdd9048e10aae\PharIo\Version\OrVersionConstraintGroup('foo', [$firstConstraint, $secondConstraint]);
        $this->assertFalse($group->complies(new \_PhpScoperdd9048e10aae\PharIo\Version\Version('1.0.0')));
    }
}
