<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper339d822a09a0\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper339d822a09a0\PharIo\Version\Version
    {
        return new \_PhpScoper339d822a09a0\PharIo\Version\Version($version);
    }
}
