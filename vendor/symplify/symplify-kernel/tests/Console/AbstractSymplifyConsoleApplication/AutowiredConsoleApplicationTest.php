<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\Tests\Console\AbstractSymplifyConsoleApplication;

use _PhpScoperb397db9687c8\Symfony\Component\Console\Application;
use Symplify\PackageBuilder\Testing\AbstractKernelTestCase;
use Symplify\SymplifyKernel\Tests\HttpKernel\PackageBuilderTestingKernel;
final class AutowiredConsoleApplicationTest extends \Symplify\PackageBuilder\Testing\AbstractKernelTestCase
{
    protected function setUp() : void
    {
        $this->bootKernel(\Symplify\SymplifyKernel\Tests\HttpKernel\PackageBuilderTestingKernel::class);
    }
    public function test() : void
    {
        $application = $this->getService(\_PhpScoperb397db9687c8\Symfony\Component\Console\Application::class);
        $this->assertInstanceOf(\_PhpScoperb397db9687c8\Symfony\Component\Console\Application::class, $application);
    }
}
