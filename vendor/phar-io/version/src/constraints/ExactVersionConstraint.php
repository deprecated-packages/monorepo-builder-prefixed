<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper5665d3e54f4c\PharIo\Version;

class ExactVersionConstraint extends \_PhpScoper5665d3e54f4c\PharIo\Version\AbstractVersionConstraint
{
    /**
     * @param Version $version
     *
     * @return bool
     */
    public function complies(\_PhpScoper5665d3e54f4c\PharIo\Version\Version $version)
    {
        return $this->asString() == $version->getVersionString();
    }
}
