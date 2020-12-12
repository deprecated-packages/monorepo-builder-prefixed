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
namespace _PhpScoperc693a7d83f11\PharIo\Version;

class SpecificMajorVersionConstraint extends \_PhpScoperc693a7d83f11\PharIo\Version\AbstractVersionConstraint
{
    /** @var int */
    private $major = 0;
    /**
     * @param string $originalValue
     * @param int    $major
     */
    public function __construct($originalValue, $major)
    {
        parent::__construct($originalValue);
        $this->major = $major;
    }
    public function complies(\_PhpScoperc693a7d83f11\PharIo\Version\Version $version) : bool
    {
        return $version->getMajor()->getValue() === $this->major;
    }
}
