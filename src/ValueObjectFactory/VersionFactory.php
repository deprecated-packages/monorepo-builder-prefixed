<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper5d7ea4b0668d\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper5d7ea4b0668d\PharIo\Version\Version
    {
        return new \_PhpScoper5d7ea4b0668d\PharIo\Version\Version($version);
    }
}
