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
namespace _PhpScoper1e8bd38a2146\PharIo\Version;

class ExactVersionConstraint extends \_PhpScoper1e8bd38a2146\PharIo\Version\AbstractVersionConstraint
{
    public function complies(\_PhpScoper1e8bd38a2146\PharIo\Version\Version $version) : bool
    {
        return $this->asString() === $version->getVersionString();
    }
}
