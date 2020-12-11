<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperbb737891eded\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperbb737891eded\PharIo\Version\Version
    {
        return new \_PhpScoperbb737891eded\PharIo\Version\Version($version);
    }
}
