<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbe77f3b0e77d\PharIo\Version;

class AnyVersionConstraint implements \_PhpScoperbe77f3b0e77d\PharIo\Version\VersionConstraint
{
    /**
     * @param Version $version
     *
     * @return bool
     */
    public function complies(\_PhpScoperbe77f3b0e77d\PharIo\Version\Version $version)
    {
        return \true;
    }
    /**
     * @return string
     */
    public function asString()
    {
        return '*';
    }
}
