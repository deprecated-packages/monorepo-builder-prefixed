<?php

declare (strict_types=1);
/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper6b92aa0ec16f\PharIo\Version;

class AnyVersionConstraint implements \_PhpScoper6b92aa0ec16f\PharIo\Version\VersionConstraint
{
    public function complies(\_PhpScoper6b92aa0ec16f\PharIo\Version\Version $version) : bool
    {
        return \true;
    }
    public function asString() : string
    {
        return '*';
    }
}
