<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperad3f32c1b87c\PharIo\Version;

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
            throw new \_PhpScoperad3f32c1b87c\PharIo\Version\UnsupportedVersionConstraintException(\sprintf('Version constraint %s is not supported.', $value));
        }
        switch ($value[0]) {
            case '~':
                return $this->handleTildeOperator($value);
            case '^':
                return $this->handleCaretOperator($value);
        }
        $version = new \_PhpScoperad3f32c1b87c\PharIo\Version\VersionConstraintValue($value);
        if ($version->getMajor()->isAny()) {
            return new \_PhpScoperad3f32c1b87c\PharIo\Version\AnyVersionConstraint();
        }
        if ($version->getMinor()->isAny()) {
            return new \_PhpScoperad3f32c1b87c\PharIo\Version\SpecificMajorVersionConstraint($version->getVersionString(), $version->getMajor()->getValue());
        }
        if ($version->getPatch()->isAny()) {
            return new \_PhpScoperad3f32c1b87c\PharIo\Version\SpecificMajorAndMinorVersionConstraint($version->getVersionString(), $version->getMajor()->getValue(), $version->getMinor()->getValue());
        }
        return new \_PhpScoperad3f32c1b87c\PharIo\Version\ExactVersionConstraint($version->getVersionString());
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
        return new \_PhpScoperad3f32c1b87c\PharIo\Version\OrVersionConstraintGroup($value, $constraints);
    }
    /**
     * @param string $value
     *
     * @return AndVersionConstraintGroup
     */
    private function handleTildeOperator($value)
    {
        $version = new \_PhpScoperad3f32c1b87c\PharIo\Version\Version(\substr($value, 1));
        $constraints = [new \_PhpScoperad3f32c1b87c\PharIo\Version\GreaterThanOrEqualToVersionConstraint($value, $version)];
        if ($version->getPatch()->isAny()) {
            $constraints[] = new \_PhpScoperad3f32c1b87c\PharIo\Version\SpecificMajorVersionConstraint($value, $version->getMajor()->getValue());
        } else {
            $constraints[] = new \_PhpScoperad3f32c1b87c\PharIo\Version\SpecificMajorAndMinorVersionConstraint($value, $version->getMajor()->getValue(), $version->getMinor()->getValue());
        }
        return new \_PhpScoperad3f32c1b87c\PharIo\Version\AndVersionConstraintGroup($value, $constraints);
    }
    /**
     * @param string $value
     *
     * @return AndVersionConstraintGroup
     */
    private function handleCaretOperator($value)
    {
        $version = new \_PhpScoperad3f32c1b87c\PharIo\Version\Version(\substr($value, 1));
        return new \_PhpScoperad3f32c1b87c\PharIo\Version\AndVersionConstraintGroup($value, [new \_PhpScoperad3f32c1b87c\PharIo\Version\GreaterThanOrEqualToVersionConstraint($value, $version), new \_PhpScoperad3f32c1b87c\PharIo\Version\SpecificMajorVersionConstraint($value, $version->getMajor()->getValue())]);
    }
}
