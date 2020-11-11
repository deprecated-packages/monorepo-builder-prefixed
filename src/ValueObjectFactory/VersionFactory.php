<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper416e75c46c6e\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper416e75c46c6e\PharIo\Version\Version
    {
        return new \_PhpScoper416e75c46c6e\PharIo\Version\Version($version);
    }
}
