<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper82732e472d5e\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper82732e472d5e\PharIo\Version\Version
    {
        return new \_PhpScoper82732e472d5e\PharIo\Version\Version($version);
    }
}
