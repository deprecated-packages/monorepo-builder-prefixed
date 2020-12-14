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
namespace _PhpScoperdd624bbcb4e5\PharIo\Version;

class ExactVersionConstraint extends \_PhpScoperdd624bbcb4e5\PharIo\Version\AbstractVersionConstraint
{
    public function complies(\_PhpScoperdd624bbcb4e5\PharIo\Version\Version $version) : bool
    {
        return $this->asString() === $version->getVersionString();
    }
}
