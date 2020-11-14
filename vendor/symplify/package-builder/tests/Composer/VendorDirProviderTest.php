<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Tests\Composer;

use _PhpScopera00544d51e07\PHPUnit\Framework\TestCase;
use Symplify\PackageBuilder\Composer\VendorDirProvider;
final class VendorDirProviderTest extends \_PhpScopera00544d51e07\PHPUnit\Framework\TestCase
{
    public function testProvide() : void
    {
        $vendorDirProvider = new \Symplify\PackageBuilder\Composer\VendorDirProvider();
        $this->assertStringEndsWith('vendor', $vendorDirProvider->provide());
        $this->assertFileExists($vendorDirProvider->provide() . '/autoload.php');
    }
}
