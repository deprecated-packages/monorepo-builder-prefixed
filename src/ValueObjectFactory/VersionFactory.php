<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperf48ea5df9e9b\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperf48ea5df9e9b\PharIo\Version\Version
    {
        return new \_PhpScoperf48ea5df9e9b\PharIo\Version\Version($version);
    }
}
