<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Init\Composer;

use _PhpScoperc41e8050ff3f\Jean85\PrettyVersions;
use _PhpScoperc41e8050ff3f\Nette\Utils\Json as NetteJson;
use OutOfBoundsException;
use _PhpScoperc41e8050ff3f\PharIo\Version\InvalidVersionException;
use _PhpScoperc41e8050ff3f\PharIo\Version\Version;
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
            $prettyVersion = \_PhpScoperc41e8050ff3f\Jean85\PrettyVersions::getVersion($packageName)->getPrettyVersion();
            $version = new \_PhpScoperc41e8050ff3f\PharIo\Version\Version(\str_replace('x-dev', '0', $prettyVersion));
        } catch (\OutOfBoundsException|\_PhpScoperc41e8050ff3f\PharIo\Version\InvalidVersionException $exceptoin) {
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
    private function extractFromComposer(string $packageName) : ?\_PhpScoperc41e8050ff3f\PharIo\Version\Version
    {
        $installedJsonFilename = \sprintf('%s/composer/installed.json', \dirname(__DIR__, 6));
        if (\is_file($installedJsonFilename)) {
            $installedJsonFileContent = $this->smartFileSystem->readFile($installedJsonFilename);
            $installedJson = \_PhpScoperc41e8050ff3f\Nette\Utils\Json::decode($installedJsonFileContent);
            foreach ($installedJson as $installedPackage) {
                if ($installedPackage->name === $packageName) {
                    return new \_PhpScoperc41e8050ff3f\PharIo\Version\Version($installedPackage->version);
                }
            }
        }
        return null;
    }
}
