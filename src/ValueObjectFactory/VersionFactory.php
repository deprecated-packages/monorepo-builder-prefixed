<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperd3e9cfbe9d90\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperd3e9cfbe9d90\PharIo\Version\Version
    {
        return new \_PhpScoperd3e9cfbe9d90\PharIo\Version\Version($version);
    }
}
