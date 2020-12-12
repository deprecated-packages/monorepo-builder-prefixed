<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperf40000691b7b\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperf40000691b7b\PharIo\Version\Version
    {
        return new \_PhpScoperf40000691b7b\PharIo\Version\Version($version);
    }
}
