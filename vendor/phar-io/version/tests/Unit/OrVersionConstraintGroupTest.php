<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperad3f32c1b87c\PharIo\Version;

use _PhpScoperad3f32c1b87c\PHPUnit\Framework\TestCase;
/**
 * @covers \PharIo\Version\OrVersionConstraintGroup
 */
class OrVersionConstraintGroupTest extends \_PhpScoperad3f32c1b87c\PHPUnit\Framework\TestCase
{
    public function testReturnsTrueIfOneConstraintReturnsFalse()
    {
        $firstConstraint = $this->createMock(\_PhpScoperad3f32c1b87c\PharIo\Version\VersionConstraint::class);
        $secondConstraint = $this->createMock(\_PhpScoperad3f32c1b87c\PharIo\Version\VersionConstraint::class);
        $firstConstraint->expects($this->once())->method('complies')->will($this->returnValue(\false));
        $secondConstraint->expects($this->once())->method('complies')->will($this->returnValue(\true));
        $group = new \_PhpScoperad3f32c1b87c\PharIo\Version\OrVersionConstraintGroup('foo', [$firstConstraint, $secondConstraint]);
        $this->assertTrue($group->complies(new \_PhpScoperad3f32c1b87c\PharIo\Version\Version('1.0.0')));
    }
    public function testReturnsTrueIfAllConstraintsReturnsTrue()
    {
        $firstConstraint = $this->createMock(\_PhpScoperad3f32c1b87c\PharIo\Version\VersionConstraint::class);
        $secondConstraint = $this->createMock(\_PhpScoperad3f32c1b87c\PharIo\Version\VersionConstraint::class);
        $firstConstraint->expects($this->once())->method('complies')->will($this->returnValue(\true));
        $group = new \_PhpScoperad3f32c1b87c\PharIo\Version\OrVersionConstraintGroup('foo', [$firstConstraint, $secondConstraint]);
        $this->assertTrue($group->complies(new \_PhpScoperad3f32c1b87c\PharIo\Version\Version('1.0.0')));
    }
    public function testReturnsFalseIfAllConstraintsReturnsFalse()
    {
        $firstConstraint = $this->createMock(\_PhpScoperad3f32c1b87c\PharIo\Version\VersionConstraint::class);
        $secondConstraint = $this->createMock(\_PhpScoperad3f32c1b87c\PharIo\Version\VersionConstraint::class);
        $firstConstraint->expects($this->once())->method('complies')->will($this->returnValue(\false));
        $secondConstraint->expects($this->once())->method('complies')->will($this->returnValue(\false));
        $group = new \_PhpScoperad3f32c1b87c\PharIo\Version\OrVersionConstraintGroup('foo', [$firstConstraint, $secondConstraint]);
        $this->assertFalse($group->complies(new \_PhpScoperad3f32c1b87c\PharIo\Version\Version('1.0.0')));
    }
}
