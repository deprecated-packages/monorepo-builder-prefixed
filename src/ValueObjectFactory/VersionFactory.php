<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperc1a0b7b3175f\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperc1a0b7b3175f\PharIo\Version\Version
    {
        return new \_PhpScoperc1a0b7b3175f\PharIo\Version\Version($version);
    }
}
