<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperee3ad0c2c096\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperee3ad0c2c096\PharIo\Version\Version
    {
        return new \_PhpScoperee3ad0c2c096\PharIo\Version\Version($version);
    }
}
