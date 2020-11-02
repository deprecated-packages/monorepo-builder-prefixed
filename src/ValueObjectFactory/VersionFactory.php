<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperabb8c88e9df1\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperabb8c88e9df1\PharIo\Version\Version
    {
        return new \_PhpScoperabb8c88e9df1\PharIo\Version\Version($version);
    }
}
