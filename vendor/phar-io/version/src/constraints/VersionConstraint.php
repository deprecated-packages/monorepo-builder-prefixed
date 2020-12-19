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
namespace _PhpScoper6d6e02e9c455\PharIo\Version;

interface VersionConstraint
{
    public function complies(\_PhpScoper6d6e02e9c455\PharIo\Version\Version $version) : bool;
    public function asString() : string;
}
