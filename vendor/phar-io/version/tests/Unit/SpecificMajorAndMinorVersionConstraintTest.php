<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere6fd569fd43f\PharIo\Version;

use _PhpScopere6fd569fd43f\PHPUnit\Framework\TestCase;
/**
 * @covers \PharIo\Version\SpecificMajorAndMinorVersionConstraint
 */
class SpecificMajorAndMinorVersionConstraintTest extends \_PhpScopere6fd569fd43f\PHPUnit\Framework\TestCase
{
    public function versionProvider()
    {
        return [
            // compliant versions
            [1, 0, new \_PhpScopere6fd569fd43f\PharIo\Version\Version('1.0.2'), \true],
            [1, 0, new \_PhpScopere6fd569fd43f\PharIo\Version\Version('1.0.3'), \true],
            [1, 1, new \_PhpScopere6fd569fd43f\PharIo\Version\Version('1.1.1'), \true],
            // non-compliant versions
            [2, 9, new \_PhpScopere6fd569fd43f\PharIo\Version\Version('0.9.9'), \false],
            [3, 2, new \_PhpScopere6fd569fd43f\PharIo\Version\Version('2.2.3'), \false],
            [2, 8, new \_PhpScopere6fd569fd43f\PharIo\Version\Version('2.9.9'), \false],
        ];
    }
    /**
     * @dataProvider versionProvider
     *
     * @param int $major
     * @param int $minor
     * @param Version $version
     * @param bool $expectedResult
     */
    public function testReturnsTrueForCompliantVersions($major, $minor, \_PhpScopere6fd569fd43f\PharIo\Version\Version $version, $expectedResult)
    {
        $constraint = new \_PhpScopere6fd569fd43f\PharIo\Version\SpecificMajorAndMinorVersionConstraint('foo', $major, $minor);
        $this->assertSame($expectedResult, $constraint->complies($version));
    }
}
