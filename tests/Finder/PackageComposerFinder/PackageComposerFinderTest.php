<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Tests\Finder\PackageComposerFinder;

use Symplify\MonorepoBuilder\Finder\PackageComposerFinder;
use Symplify\MonorepoBuilder\HttpKernel\MonorepoBuilderKernel;
use Symplify\PackageBuilder\Tests\AbstractKernelTestCase;
final class PackageComposerFinderTest extends \Symplify\PackageBuilder\Tests\AbstractKernelTestCase
{
    /**
     * @var PackageComposerFinder
     */
    private $packageComposerFinder;
    protected function setUp() : void
    {
        self::bootKernelWithConfigs(\Symplify\MonorepoBuilder\HttpKernel\MonorepoBuilderKernel::class, [__DIR__ . '/Source/source_config.php']);
        $this->packageComposerFinder = self::$container->get(\Symplify\MonorepoBuilder\Finder\PackageComposerFinder::class);
    }
    public function test() : void
    {
        $this->assertCount(2, $this->packageComposerFinder->getPackageComposerFiles());
    }
}
