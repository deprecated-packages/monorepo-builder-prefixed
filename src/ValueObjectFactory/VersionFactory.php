<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper31b05558ad5c\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper31b05558ad5c\PharIo\Version\Version
    {
        return new \_PhpScoper31b05558ad5c\PharIo\Version\Version($version);
    }
}
