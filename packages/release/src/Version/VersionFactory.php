<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Release\Version;

use _PhpScopercd5c1af09a49\PharIo\Version\Version;
use Symplify\MonorepoBuilder\Git\MostRecentTagResolver;
use Symplify\MonorepoBuilder\Release\Guard\ReleaseGuard;
use Symplify\MonorepoBuilder\Release\ValueObject\SemVersion;
final class VersionFactory
{
    /**
     * @var ReleaseGuard
     */
    private $releaseGuard;
    /**
     * @var MostRecentTagResolver
     */
    private $mostRecentTagResolver;
    public function __construct(\Symplify\MonorepoBuilder\Release\Guard\ReleaseGuard $releaseGuard, \Symplify\MonorepoBuilder\Git\MostRecentTagResolver $mostRecentTagResolver)
    {
        $this->releaseGuard = $releaseGuard;
        $this->mostRecentTagResolver = $mostRecentTagResolver;
    }
    public function createValidVersion(string $versionArgument, string $stage) : \_PhpScopercd5c1af09a49\PharIo\Version\Version
    {
        // normalize to workaround phar-io bug
        $versionArgument = \strtolower($versionArgument);
        if (\in_array($versionArgument, \Symplify\MonorepoBuilder\Release\ValueObject\SemVersion::ALL, \true)) {
            return $this->resolveNextVersionByVersionKind($versionArgument);
        }
        // this object performs validation of version
        $version = new \_PhpScopercd5c1af09a49\PharIo\Version\Version($versionArgument);
        $this->releaseGuard->guardVersion($version, $stage);
        return $version;
    }
    private function resolveNextVersionByVersionKind(string $versionKind) : \_PhpScopercd5c1af09a49\PharIo\Version\Version
    {
        // get current version
        $mostRecentVersion = $this->mostRecentTagResolver->resolve(\getcwd());
        if ($mostRecentVersion === null) {
            // the very first tag
            return new \_PhpScopercd5c1af09a49\PharIo\Version\Version('v0.1.0');
        }
        $mostRecentVersion = new \_PhpScopercd5c1af09a49\PharIo\Version\Version($mostRecentVersion);
        $value = $mostRecentVersion->getMajor()->getValue();
        $currentMinorVersion = $mostRecentVersion->getMinor()->getValue();
        $currentPatchVersion = $mostRecentVersion->getPatch()->getValue();
        if ($versionKind === \Symplify\MonorepoBuilder\Release\ValueObject\SemVersion::MAJOR) {
            ++$value;
            $currentMinorVersion = 0;
            $currentPatchVersion = 0;
        }
        if ($versionKind === \Symplify\MonorepoBuilder\Release\ValueObject\SemVersion::MINOR) {
            ++$currentMinorVersion;
            $currentPatchVersion = 0;
        }
        if ($versionKind === \Symplify\MonorepoBuilder\Release\ValueObject\SemVersion::PATCH) {
            ++$currentPatchVersion;
        }
        return new \_PhpScopercd5c1af09a49\PharIo\Version\Version(\sprintf('v%d.%d.%d', $value, $currentMinorVersion, $currentPatchVersion));
    }
}
