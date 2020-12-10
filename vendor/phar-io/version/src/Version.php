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
namespace _PhpScoper37010f304ea9\PharIo\Version;

class Version
{
    /** @var VersionNumber */
    private $major;
    /** @var VersionNumber */
    private $minor;
    /** @var VersionNumber */
    private $patch;
    /** @var PreReleaseSuffix */
    private $preReleaseSuffix;
    /**
     * @param string $versionString
     */
    public function __construct($versionString)
    {
        $this->ensureVersionStringIsValid($versionString);
    }
    public function getPreReleaseSuffix() : \_PhpScoper37010f304ea9\PharIo\Version\PreReleaseSuffix
    {
        return $this->preReleaseSuffix;
    }
    public function getVersionString() : string
    {
        $str = \sprintf('%d.%d.%d', $this->getMajor()->getValue(), $this->getMinor()->getValue(), $this->getPatch()->getValue());
        if (!$this->hasPreReleaseSuffix()) {
            return $str;
        }
        return $str . '-' . $this->getPreReleaseSuffix()->asString();
    }
    public function hasPreReleaseSuffix() : bool
    {
        return $this->preReleaseSuffix !== null;
    }
    public function equals(\_PhpScoper37010f304ea9\PharIo\Version\Version $other) : bool
    {
        return $this->getVersionString() === $other->getVersionString();
    }
    public function isGreaterThan(\_PhpScoper37010f304ea9\PharIo\Version\Version $version) : bool
    {
        if ($version->getMajor()->getValue() > $this->getMajor()->getValue()) {
            return \false;
        }
        if ($version->getMajor()->getValue() < $this->getMajor()->getValue()) {
            return \true;
        }
        if ($version->getMinor()->getValue() > $this->getMinor()->getValue()) {
            return \false;
        }
        if ($version->getMinor()->getValue() < $this->getMinor()->getValue()) {
            return \true;
        }
        if ($version->getPatch()->getValue() > $this->getPatch()->getValue()) {
            return \false;
        }
        if ($version->getPatch()->getValue() < $this->getPatch()->getValue()) {
            return \true;
        }
        if (!$version->hasPreReleaseSuffix() && !$this->hasPreReleaseSuffix()) {
            return \false;
        }
        if ($version->hasPreReleaseSuffix() && !$this->hasPreReleaseSuffix()) {
            return \true;
        }
        if (!$version->hasPreReleaseSuffix() && $this->hasPreReleaseSuffix()) {
            return \false;
        }
        return $this->getPreReleaseSuffix()->isGreaterThan($version->getPreReleaseSuffix());
    }
    public function getMajor() : \_PhpScoper37010f304ea9\PharIo\Version\VersionNumber
    {
        return $this->major;
    }
    public function getMinor() : \_PhpScoper37010f304ea9\PharIo\Version\VersionNumber
    {
        return $this->minor;
    }
    public function getPatch() : \_PhpScoper37010f304ea9\PharIo\Version\VersionNumber
    {
        return $this->patch;
    }
    private function parseVersion(array $matches) : void
    {
        $this->major = new \_PhpScoper37010f304ea9\PharIo\Version\VersionNumber((int) $matches['Major']);
        $this->minor = new \_PhpScoper37010f304ea9\PharIo\Version\VersionNumber((int) $matches['Minor']);
        $this->patch = isset($matches['Patch']) ? new \_PhpScoper37010f304ea9\PharIo\Version\VersionNumber((int) $matches['Patch']) : new \_PhpScoper37010f304ea9\PharIo\Version\VersionNumber(0);
        if (isset($matches['PreReleaseSuffix'])) {
            $this->preReleaseSuffix = new \_PhpScoper37010f304ea9\PharIo\Version\PreReleaseSuffix($matches['PreReleaseSuffix']);
        }
    }
    /**
     * @param string $version
     *
     * @throws InvalidVersionException
     */
    private function ensureVersionStringIsValid($version) : void
    {
        $regex = '/^v?
            (?<Major>(0|(?:[1-9]\\d*)))
            \\.
            (?<Minor>(0|(?:[1-9]\\d*)))
            (\\.
                (?<Patch>(0|(?:[1-9]\\d*)))
            )?
            (?:
                -
                (?<PreReleaseSuffix>(?:(dev|beta|b|rc|alpha|a|patch|p)\\.?\\d*))
            )?       
        $/xi';
        if (\preg_match($regex, $version, $matches) !== 1) {
            throw new \_PhpScoper37010f304ea9\PharIo\Version\InvalidVersionException(\sprintf("Version string '%s' does not follow SemVer semantics", $version));
        }
        $this->parseVersion($matches);
    }
}
