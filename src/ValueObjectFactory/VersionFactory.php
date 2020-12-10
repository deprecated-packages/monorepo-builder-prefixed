<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper53a6895b9c5b\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper53a6895b9c5b\PharIo\Version\Version
    {
        return new \_PhpScoper53a6895b9c5b\PharIo\Version\Version($version);
    }
}
