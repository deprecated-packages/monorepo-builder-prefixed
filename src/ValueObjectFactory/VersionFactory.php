<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper602c6d8f02d8\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper602c6d8f02d8\PharIo\Version\Version
    {
        return new \_PhpScoper602c6d8f02d8\PharIo\Version\Version($version);
    }
}
