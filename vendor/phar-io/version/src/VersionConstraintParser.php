<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperee8f03533f8b\PharIo\Version;

class VersionConstraintParser
{
    /**
     * @param string $value
     *
     * @return VersionConstraint
     *
     * @throws UnsupportedVersionConstraintException
     */
    public function parse($value)
    {
        if (\strpos($value, '||') !== \false) {
            return $this->handleOrGroup($value);
        }
        if (!\preg_match('/^[\\^~\\*]?[\\d.\\*]+(?:-.*)?$/', $value)) {
            throw new \_PhpScoperee8f03533f8b\PharIo\Version\UnsupportedVersionConstraintException(\sprintf('Version constraint %s is not supported.', $value));
        }
        switch ($value[0]) {
            case '~':
                return $this->handleTildeOperator($value);
            case '^':
                return $this->handleCaretOperator($value);
        }
        $version = new \_PhpScoperee8f03533f8b\PharIo\Version\VersionConstraintValue($value);
        if ($version->getMajor()->isAny()) {
            return new \_PhpScoperee8f03533f8b\PharIo\Version\AnyVersionConstraint();
        }
        if ($version->getMinor()->isAny()) {
            return new \_PhpScoperee8f03533f8b\PharIo\Version\SpecificMajorVersionConstraint($version->getVersionString(), $version->getMajor()->getValue());
        }
        if ($version->getPatch()->isAny()) {
            return new \_PhpScoperee8f03533f8b\PharIo\Version\SpecificMajorAndMinorVersionConstraint($version->getVersionString(), $version->getMajor()->getValue(), $version->getMinor()->getValue());
        }
        return new \_PhpScoperee8f03533f8b\PharIo\Version\ExactVersionConstraint($version->getVersionString());
    }
    /**
     * @param $value
     *
     * @return OrVersionConstraintGroup
     */
    private function handleOrGroup($value)
    {
        $constraints = [];
        foreach (\explode('||', $value) as $groupSegment) {
            $constraints[] = $this->parse(\trim($groupSegment));
        }
        return new \_PhpScoperee8f03533f8b\PharIo\Version\OrVersionConstraintGroup($value, $constraints);
    }
    /**
     * @param string $value
     *
     * @return AndVersionConstraintGroup
     */
    private function handleTildeOperator($value)
    {
        $version = new \_PhpScoperee8f03533f8b\PharIo\Version\Version(\substr($value, 1));
        $constraints = [new \_PhpScoperee8f03533f8b\PharIo\Version\GreaterThanOrEqualToVersionConstraint($value, $version)];
        if ($version->getPatch()->isAny()) {
            $constraints[] = new \_PhpScoperee8f03533f8b\PharIo\Version\SpecificMajorVersionConstraint($value, $version->getMajor()->getValue());
        } else {
            $constraints[] = new \_PhpScoperee8f03533f8b\PharIo\Version\SpecificMajorAndMinorVersionConstraint($value, $version->getMajor()->getValue(), $version->getMinor()->getValue());
        }
        return new \_PhpScoperee8f03533f8b\PharIo\Version\AndVersionConstraintGroup($value, $constraints);
    }
    /**
     * @param string $value
     *
     * @return AndVersionConstraintGroup
     */
    private function handleCaretOperator($value)
    {
        $version = new \_PhpScoperee8f03533f8b\PharIo\Version\Version(\substr($value, 1));
        return new \_PhpScoperee8f03533f8b\PharIo\Version\AndVersionConstraintGroup($value, [new \_PhpScoperee8f03533f8b\PharIo\Version\GreaterThanOrEqualToVersionConstraint($value, $version), new \_PhpScoperee8f03533f8b\PharIo\Version\SpecificMajorVersionConstraint($value, $version->getMajor()->getValue())]);
    }
}
