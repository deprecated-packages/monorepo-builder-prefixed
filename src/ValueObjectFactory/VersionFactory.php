<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperc0b8351d879b\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperc0b8351d879b\PharIo\Version\Version
    {
        return new \_PhpScoperc0b8351d879b\PharIo\Version\Version($version);
    }
}
