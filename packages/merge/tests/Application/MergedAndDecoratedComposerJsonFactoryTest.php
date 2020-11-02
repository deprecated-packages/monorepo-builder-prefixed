<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Merge\Tests\Application;

use Symplify\MonorepoBuilder\Merge\Application\MergedAndDecoratedComposerJsonFactory;
use Symplify\MonorepoBuilder\Merge\Tests\ComposerJsonDecorator\AbstractComposerJsonDecoratorTest;
use Symplify\SmartFileSystem\SmartFileInfo;
final class MergedAndDecoratedComposerJsonFactoryTest extends \Symplify\MonorepoBuilder\Merge\Tests\ComposerJsonDecorator\AbstractComposerJsonDecoratorTest
{
    /**
     * @var MergedAndDecoratedComposerJsonFactory
     */
    private $mergedAndDecoratedComposerJsonFactory;
    protected function setUp() : void
    {
        parent::setUp();
        $this->mergedAndDecoratedComposerJsonFactory = self::$container->get(\Symplify\MonorepoBuilder\Merge\Application\MergedAndDecoratedComposerJsonFactory::class);
    }
    public function test() : void
    {
        if (!\defined('SYMPLIFY_MONOREPO')) {
            $this->markTestSkipped('Already tested on monorepo');
        }
        $mainComposerJson = $this->createComposerJson(__DIR__ . '/Source/root_composer.json');
        $packagesFileInfos = [new \Symplify\SmartFileSystem\SmartFileInfo(__DIR__ . '/Source/packages/one_package.json'), new \Symplify\SmartFileSystem\SmartFileInfo(__DIR__ . '/Source/packages/two_package.json')];
        $this->mergedAndDecoratedComposerJsonFactory->createFromRootConfigAndPackageFileInfos($mainComposerJson, $packagesFileInfos);
        $this->assertComposerJsonEquals(__DIR__ . '/Source/expected_composer.json', $mainComposerJson);
    }
}
