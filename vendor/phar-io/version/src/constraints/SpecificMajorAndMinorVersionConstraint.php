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
namespace _PhpScoper50e98fdc5bc0\PharIo\Version;

class SpecificMajorAndMinorVersionConstraint extends \_PhpScoper50e98fdc5bc0\PharIo\Version\AbstractVersionConstraint
{
    /** @var int */
    private $major = 0;
    /** @var int */
    private $minor = 0;
    /**
     * @param string $originalValue
     * @param int    $major
     * @param int    $minor
     */
    public function __construct($originalValue, $major, $minor)
    {
        parent::__construct($originalValue);
        $this->major = $major;
        $this->minor = $minor;
    }
    public function complies(\_PhpScoper50e98fdc5bc0\PharIo\Version\Version $version) : bool
    {
        if ($version->getMajor()->getValue() !== $this->major) {
            return \false;
        }
        return $version->getMinor()->getValue() === $this->minor;
    }
}
