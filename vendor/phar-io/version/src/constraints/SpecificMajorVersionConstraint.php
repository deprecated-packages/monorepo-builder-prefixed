<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf9ff1c3447b1\PharIo\Version;

class SpecificMajorVersionConstraint extends \_PhpScoperf9ff1c3447b1\PharIo\Version\AbstractVersionConstraint
{
    /**
     * @var int
     */
    private $major = 0;
    /**
     * @param string $originalValue
     * @param int $major
     */
    public function __construct($originalValue, $major)
    {
        parent::__construct($originalValue);
        $this->major = $major;
    }
    /**
     * @param Version $version
     *
     * @return bool
     */
    public function complies(\_PhpScoperf9ff1c3447b1\PharIo\Version\Version $version)
    {
        return $version->getMajor()->getValue() == $this->major;
    }
}
