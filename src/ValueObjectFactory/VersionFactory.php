<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper912e6d747d7e\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper912e6d747d7e\PharIo\Version\Version
    {
        return new \_PhpScoper912e6d747d7e\PharIo\Version\Version($version);
    }
}
