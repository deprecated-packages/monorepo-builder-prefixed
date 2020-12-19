<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperf6f8e31183c3\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperf6f8e31183c3\PharIo\Version\Version
    {
        return new \_PhpScoperf6f8e31183c3\PharIo\Version\Version($version);
    }
}
