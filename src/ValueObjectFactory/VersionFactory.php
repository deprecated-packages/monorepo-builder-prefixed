<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperc35444adb584\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperc35444adb584\PharIo\Version\Version
    {
        return new \_PhpScoperc35444adb584\PharIo\Version\Version($version);
    }
}
