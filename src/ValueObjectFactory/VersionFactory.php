<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper84ee03573073\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper84ee03573073\PharIo\Version\Version
    {
        return new \_PhpScoper84ee03573073\PharIo\Version\Version($version);
    }
}
