<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper93a7e58d9dd1\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper93a7e58d9dd1\PharIo\Version\Version
    {
        return new \_PhpScoper93a7e58d9dd1\PharIo\Version\Version($version);
    }
}
