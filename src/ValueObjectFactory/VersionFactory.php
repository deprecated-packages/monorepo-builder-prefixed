<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperf0b2c071f15d\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperf0b2c071f15d\PharIo\Version\Version
    {
        return new \_PhpScoperf0b2c071f15d\PharIo\Version\Version($version);
    }
}
