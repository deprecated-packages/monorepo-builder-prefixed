<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Release\Version;

use _PhpScoper935bde169806\PharIo\Version\Version;
use Symplify\MonorepoBuilder\Release\Guard\ReleaseGuard;
use Symplify\MonorepoBuilder\Release\ValueObject\SemVersion;
use Symplify\MonorepoBuilder\Split\Git\GitManager;
final class VersionFactory
{
    /**
     * @var ReleaseGuard
     */
    private $releaseGuard;
    /**
     * @var GitManager
     */
    private $gitManager;
    public function __construct(\Symplify\MonorepoBuilder\Release\Guard\ReleaseGuard $releaseGuard, \Symplify\MonorepoBuilder\Split\Git\GitManager $gitManager)
    {
        $this->releaseGuard = $releaseGuard;
        $this->gitManager = $gitManager;
    }
    public function createValidVersion(string $versionArgument, ?string $stage) : \_PhpScoper935bde169806\PharIo\Version\Version
    {
        if (\in_array($versionArgument, \Symplify\MonorepoBuilder\Release\ValueObject\SemVersion::ALL, \true)) {
            return $this->resolveNextVersionByVersionKind($versionArgument);
        }
        // this object performs validation of version
        $version = new \_PhpScoper935bde169806\PharIo\Version\Version($versionArgument);
        $this->releaseGuard->guardVersion($version, $stage);
        return $version;
    }
    private function resolveNextVersionByVersionKind(string $versionKind) : \_PhpScoper935bde169806\PharIo\Version\Version
    {
        // get current version
        $mostRecentVersion = $this->gitManager->getMostRecentTag(\getcwd());
        if ($mostRecentVersion === null) {
            // the very first tag
            return new \_PhpScoper935bde169806\PharIo\Version\Version('v0.1.0');
        }
        $mostRecentVersion = new \_PhpScoper935bde169806\PharIo\Version\Version($mostRecentVersion);
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
        return new \_PhpScoper935bde169806\PharIo\Version\Version(\sprintf('v%d.%d.%d', $value, $currentMinorVersion, $currentPatchVersion));
    }
}
