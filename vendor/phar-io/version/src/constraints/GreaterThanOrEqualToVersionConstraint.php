<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd6a443964d04\PharIo\Version;

class GreaterThanOrEqualToVersionConstraint extends \_PhpScoperd6a443964d04\PharIo\Version\AbstractVersionConstraint
{
    /**
     * @var Version
     */
    private $minimalVersion;
    /**
     * @param string $originalValue
     * @param Version $minimalVersion
     */
    public function __construct($originalValue, \_PhpScoperd6a443964d04\PharIo\Version\Version $minimalVersion)
    {
        parent::__construct($originalValue);
        $this->minimalVersion = $minimalVersion;
    }
    /**
     * @param Version $version
     *
     * @return bool
     */
    public function complies(\_PhpScoperd6a443964d04\PharIo\Version\Version $version)
    {
        return $version->getVersionString() == $this->minimalVersion->getVersionString() || $version->isGreaterThan($this->minimalVersion);
    }
}
