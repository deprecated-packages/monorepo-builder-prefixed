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
namespace _PhpScoperc7f1624089a3\PharIo\Version;

interface VersionConstraint
{
    public function complies(\_PhpScoperc7f1624089a3\PharIo\Version\Version $version) : bool;
    public function asString() : string;
}
