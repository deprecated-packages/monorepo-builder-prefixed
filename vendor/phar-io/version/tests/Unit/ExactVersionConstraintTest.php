<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper54d694ea578e\PharIo\Version;

use _PhpScoper54d694ea578e\PHPUnit\Framework\TestCase;
/**
 * @covers \PharIo\Version\ExactVersionConstraint
 */
class ExactVersionConstraintTest extends \_PhpScoper54d694ea578e\PHPUnit\Framework\TestCase
{
    public function compliantVersionProvider()
    {
        return [['1.0.2', new \_PhpScoper54d694ea578e\PharIo\Version\Version('1.0.2')], ['4.8.9', new \_PhpScoper54d694ea578e\PharIo\Version\Version('4.8.9')], ['4.8', new \_PhpScoper54d694ea578e\PharIo\Version\Version('4.8')]];
    }
    public function nonCompliantVersionProvider()
    {
        return [['1.0.2', new \_PhpScoper54d694ea578e\PharIo\Version\Version('1.0.3')], ['4.8.9', new \_PhpScoper54d694ea578e\PharIo\Version\Version('4.7.9')], ['4.8', new \_PhpScoper54d694ea578e\PharIo\Version\Version('4.8.5')]];
    }
    /**
     * @dataProvider compliantVersionProvider
     *
     * @param string $constraintValue
     * @param Version $version
     */
    public function testReturnsTrueForCompliantVersion($constraintValue, \_PhpScoper54d694ea578e\PharIo\Version\Version $version)
    {
        $constraint = new \_PhpScoper54d694ea578e\PharIo\Version\ExactVersionConstraint($constraintValue);
        $this->assertTrue($constraint->complies($version));
    }
    /**
     * @dataProvider nonCompliantVersionProvider
     *
     * @param string $constraintValue
     * @param Version $version
     */
    public function testReturnsFalseForNonCompliantVersion($constraintValue, \_PhpScoper54d694ea578e\PharIo\Version\Version $version)
    {
        $constraint = new \_PhpScoper54d694ea578e\PharIo\Version\ExactVersionConstraint($constraintValue);
        $this->assertFalse($constraint->complies($version));
    }
}
