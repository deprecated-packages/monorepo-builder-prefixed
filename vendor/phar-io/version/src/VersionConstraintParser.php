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
namespace _PhpScoper4f38ae1287f3\PharIo\Version;

class VersionConstraintParser
{
    /**
     * @param string $value
     *
     * @throws UnsupportedVersionConstraintException
     */
    public function parse($value) : \_PhpScoper4f38ae1287f3\PharIo\Version\VersionConstraint
    {
        if (\strpos($value, '||') !== \false) {
            return $this->handleOrGroup($value);
        }
        if (!\preg_match('/^[\\^~*]?v?[\\d.*]+(?:-.*)?$/i', $value)) {
            throw new \_PhpScoper4f38ae1287f3\PharIo\Version\UnsupportedVersionConstraintException(\sprintf('Version constraint %s is not supported.', $value));
        }
        switch ($value[0]) {
            case '~':
                return $this->handleTildeOperator($value);
            case '^':
                return $this->handleCaretOperator($value);
        }
        $version = new \_PhpScoper4f38ae1287f3\PharIo\Version\VersionConstraintValue($value);
        if ($version->getMajor()->isAny()) {
            return new \_PhpScoper4f38ae1287f3\PharIo\Version\AnyVersionConstraint();
        }
        if ($version->getMinor()->isAny()) {
            return new \_PhpScoper4f38ae1287f3\PharIo\Version\SpecificMajorVersionConstraint($version->getVersionString(), $version->getMajor()->getValue());
        }
        if ($version->getPatch()->isAny()) {
            return new \_PhpScoper4f38ae1287f3\PharIo\Version\SpecificMajorAndMinorVersionConstraint($version->getVersionString(), $version->getMajor()->getValue(), $version->getMinor()->getValue());
        }
        return new \_PhpScoper4f38ae1287f3\PharIo\Version\ExactVersionConstraint($version->getVersionString());
    }
    /**
     * @param $value
     */
    private function handleOrGroup($value) : \_PhpScoper4f38ae1287f3\PharIo\Version\OrVersionConstraintGroup
    {
        $constraints = [];
        foreach (\explode('||', $value) as $groupSegment) {
            $constraints[] = $this->parse(\trim($groupSegment));
        }
        return new \_PhpScoper4f38ae1287f3\PharIo\Version\OrVersionConstraintGroup($value, $constraints);
    }
    /**
     * @param string $value
     */
    private function handleTildeOperator($value) : \_PhpScoper4f38ae1287f3\PharIo\Version\AndVersionConstraintGroup
    {
        $version = new \_PhpScoper4f38ae1287f3\PharIo\Version\Version(\substr($value, 1));
        $constraints = [new \_PhpScoper4f38ae1287f3\PharIo\Version\GreaterThanOrEqualToVersionConstraint($value, $version)];
        if ($version->getPatch()->isAny()) {
            $constraints[] = new \_PhpScoper4f38ae1287f3\PharIo\Version\SpecificMajorVersionConstraint($value, $version->getMajor()->getValue());
        } else {
            $constraints[] = new \_PhpScoper4f38ae1287f3\PharIo\Version\SpecificMajorAndMinorVersionConstraint($value, $version->getMajor()->getValue(), $version->getMinor()->getValue());
        }
        return new \_PhpScoper4f38ae1287f3\PharIo\Version\AndVersionConstraintGroup($value, $constraints);
    }
    /**
     * @param string $value
     */
    private function handleCaretOperator($value) : \_PhpScoper4f38ae1287f3\PharIo\Version\AndVersionConstraintGroup
    {
        $version = new \_PhpScoper4f38ae1287f3\PharIo\Version\Version(\substr($value, 1));
        return new \_PhpScoper4f38ae1287f3\PharIo\Version\AndVersionConstraintGroup($value, [new \_PhpScoper4f38ae1287f3\PharIo\Version\GreaterThanOrEqualToVersionConstraint($value, $version), new \_PhpScoper4f38ae1287f3\PharIo\Version\SpecificMajorVersionConstraint($value, $version->getMajor()->getValue())]);
    }
}
