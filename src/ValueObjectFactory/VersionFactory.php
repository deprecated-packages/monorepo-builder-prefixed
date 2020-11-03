<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperb154859e1be7\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperb154859e1be7\PharIo\Version\Version
    {
        return new \_PhpScoperb154859e1be7\PharIo\Version\Version($version);
    }
}
