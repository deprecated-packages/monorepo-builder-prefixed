<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopercdfd316eda69\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopercdfd316eda69\PharIo\Version\Version
    {
        return new \_PhpScopercdfd316eda69\PharIo\Version\Version($version);
    }
}
