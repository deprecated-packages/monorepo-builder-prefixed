<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper51570eac51fe\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper51570eac51fe\PharIo\Version\Version
    {
        return new \_PhpScoper51570eac51fe\PharIo\Version\Version($version);
    }
}
