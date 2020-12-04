<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper23507306fdfc\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper23507306fdfc\PharIo\Version\Version
    {
        return new \_PhpScoper23507306fdfc\PharIo\Version\Version($version);
    }
}
