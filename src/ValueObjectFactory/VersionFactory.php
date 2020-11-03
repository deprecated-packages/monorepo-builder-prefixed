<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperc00d4390f333\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperc00d4390f333\PharIo\Version\Version
    {
        return new \_PhpScoperc00d4390f333\PharIo\Version\Version($version);
    }
}
