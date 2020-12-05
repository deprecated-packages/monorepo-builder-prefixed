<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Tests\DevMasterAliasUpdater;

use Symplify\MonorepoBuilder\DevMasterAliasUpdater;
use Symplify\MonorepoBuilder\HttpKernel\MonorepoBuilderKernel;
use Symplify\PackageBuilder\Testing\AbstractKernelTestCase;
use Symplify\SmartFileSystem\SmartFileInfo;
use Symplify\SmartFileSystem\SmartFileSystem;
final class DevMasterAliasUpdaterTest extends \Symplify\PackageBuilder\Testing\AbstractKernelTestCase
{
    /**
     * @var DevMasterAliasUpdater
     */
    private $devMasterAliasUpdater;
    /**
     * @var SmartFileSystem
     */
    private $smartFileSystem;
    protected function setUp() : void
    {
        $this->bootKernel(\Symplify\MonorepoBuilder\HttpKernel\MonorepoBuilderKernel::class);
        $this->devMasterAliasUpdater = $this->getService(\Symplify\MonorepoBuilder\DevMasterAliasUpdater::class);
        $this->smartFileSystem = $this->getService(\Symplify\SmartFileSystem\SmartFileSystem::class);
    }
    protected function tearDown() : void
    {
        $this->smartFileSystem->copy(__DIR__ . '/Source/backup-first.json', __DIR__ . '/Source/first.json');
    }
    public function test() : void
    {
        $fileInfos = [new \Symplify\SmartFileSystem\SmartFileInfo(__DIR__ . '/Source/first.json')];
        $this->devMasterAliasUpdater->updateFileInfosWithAlias($fileInfos, '4.5-dev');
        $this->assertFileEquals(__DIR__ . '/Source/expected-first.json', __DIR__ . '/Source/first.json');
    }
}
