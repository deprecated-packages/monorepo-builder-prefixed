<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Init\Composer;

use _PhpScoperb15c77d6bb3b\Jean85\PrettyVersions;
use _PhpScoperb15c77d6bb3b\Nette\Utils\Json as NetteJson;
use OutOfBoundsException;
use _PhpScoperb15c77d6bb3b\PharIo\Version\InvalidVersionException;
use _PhpScoperb15c77d6bb3b\PharIo\Version\Version;
use Symplify\SmartFileSystem\SmartFileSystem;
final class PackageNameVersionProvider
{
    /**
     * @var SmartFileSystem
     */
    private $smartFileSystem;
    public function __construct(\Symplify\SmartFileSystem\SmartFileSystem $smartFileSystem)
    {
        $this->smartFileSystem = $smartFileSystem;
    }
    /**
     * Returns current version of MonorepoBuilder, contains only major and minor.
     */
    public function provide(string $packageName) : string
    {
        $version = null;
        try {
            $prettyVersion = \_PhpScoperb15c77d6bb3b\Jean85\PrettyVersions::getVersion($packageName)->getPrettyVersion();
            $version = new \_PhpScoperb15c77d6bb3b\PharIo\Version\Version(\str_replace('x-dev', '0', $prettyVersion));
        } catch (\OutOfBoundsException|\_PhpScoperb15c77d6bb3b\PharIo\Version\InvalidVersionException $exceptoin) {
            // Version might not be explicitly set inside composer.json, looking for "vendor/composer/installed.json"
            $version = $this->extractFromComposer($packageName);
        }
        if ($version === null) {
            return 'Unknown';
        }
        return \sprintf('^%d.%d', $version->getMajor()->getValue(), $version->getMinor()->getValue());
    }
    /**
     * Returns current version of MonorepoBuilder extracting it from "vendor/composer/installed.json".
     */
    private function extractFromComposer(string $packageName) : ?\_PhpScoperb15c77d6bb3b\PharIo\Version\Version
    {
        $installedJsonFilename = \sprintf('%s/composer/installed.json', \dirname(__DIR__, 6));
        if (\is_file($installedJsonFilename)) {
            $installedJsonFileContent = $this->smartFileSystem->readFile($installedJsonFilename);
            $installedJson = \_PhpScoperb15c77d6bb3b\Nette\Utils\Json::decode($installedJsonFileContent);
            foreach ($installedJson as $installedPackage) {
                if ($installedPackage->name === $packageName) {
                    return new \_PhpScoperb15c77d6bb3b\PharIo\Version\Version($installedPackage->version);
                }
            }
        }
        return null;
    }
}
