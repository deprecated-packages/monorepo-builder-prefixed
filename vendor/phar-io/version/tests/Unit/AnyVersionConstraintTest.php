<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc41e8050ff3f\PharIo\Version;

use _PhpScoperc41e8050ff3f\PHPUnit\Framework\TestCase;
/**
 * @covers \PharIo\Version\AnyVersionConstraint
 */
class AnyVersionConstraintTest extends \_PhpScoperc41e8050ff3f\PHPUnit\Framework\TestCase
{
    public function versionProvider()
    {
        return [[new \_PhpScoperc41e8050ff3f\PharIo\Version\Version('1.0.2')], [new \_PhpScoperc41e8050ff3f\PharIo\Version\Version('4.8')], [new \_PhpScoperc41e8050ff3f\PharIo\Version\Version('0.1.1-dev')]];
    }
    /**
     * @dataProvider versionProvider
     *
     * @param Version $version
     */
    public function testReturnsTrue(\_PhpScoperc41e8050ff3f\PharIo\Version\Version $version)
    {
        $constraint = new \_PhpScoperc41e8050ff3f\PharIo\Version\AnyVersionConstraint();
        $this->assertTrue($constraint->complies($version));
    }
    public function testAsString()
    {
        $this->assertSame('*', (new \_PhpScoperc41e8050ff3f\PharIo\Version\AnyVersionConstraint())->asString());
    }
}
