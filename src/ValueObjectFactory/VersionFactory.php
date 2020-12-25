<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperff72c38d4e2a\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperff72c38d4e2a\PharIo\Version\Version
    {
        return new \_PhpScoperff72c38d4e2a\PharIo\Version\Version($version);
    }
}
