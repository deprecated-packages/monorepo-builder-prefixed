<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Release\Tests\ReleaseWorkerProvider;

use Symplify\MonorepoBuilder\HttpKernel\MonorepoBuilderKernel;
use Symplify\MonorepoBuilder\Release\ReleaseWorkerProvider;
use Symplify\PackageBuilder\Tests\AbstractKernelTestCase;
final class ReleaseWorkerProviderTest extends \Symplify\PackageBuilder\Tests\AbstractKernelTestCase
{
    /**
     * @var ReleaseWorkerProvider
     */
    private $releaseWorkerProvider;
    protected function setUp() : void
    {
        $this->bootKernelWithConfigs(\Symplify\MonorepoBuilder\HttpKernel\MonorepoBuilderKernel::class, [__DIR__ . '/config/all_release_workers.php']);
        $this->releaseWorkerProvider = self::$container->get(\Symplify\MonorepoBuilder\Release\ReleaseWorkerProvider::class);
    }
    public function test() : void
    {
        $releaseWorkers = $this->releaseWorkerProvider->provide();
        $this->assertCount(7, $releaseWorkers);
    }
}
