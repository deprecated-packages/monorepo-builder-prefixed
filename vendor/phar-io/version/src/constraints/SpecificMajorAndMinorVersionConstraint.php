<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper43a95e2f69bc\PharIo\Version;

class SpecificMajorAndMinorVersionConstraint extends \_PhpScoper43a95e2f69bc\PharIo\Version\AbstractVersionConstraint
{
    /**
     * @var int
     */
    private $major = 0;
    /**
     * @var int
     */
    private $minor = 0;
    /**
     * @param string $originalValue
     * @param int $major
     * @param int $minor
     */
    public function __construct($originalValue, $major, $minor)
    {
        parent::__construct($originalValue);
        $this->major = $major;
        $this->minor = $minor;
    }
    /**
     * @param Version $version
     *
     * @return bool
     */
    public function complies(\_PhpScoper43a95e2f69bc\PharIo\Version\Version $version)
    {
        if ($version->getMajor()->getValue() != $this->major) {
            return \false;
        }
        return $version->getMinor()->getValue() == $this->minor;
    }
}
