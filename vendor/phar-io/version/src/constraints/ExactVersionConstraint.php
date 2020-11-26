<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper27e2e7523871\PharIo\Version;

class ExactVersionConstraint extends \_PhpScoper27e2e7523871\PharIo\Version\AbstractVersionConstraint
{
    /**
     * @param Version $version
     *
     * @return bool
     */
    public function complies(\_PhpScoper27e2e7523871\PharIo\Version\Version $version)
    {
        return $this->asString() == $version->getVersionString();
    }
}
