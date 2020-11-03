<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper323d4c178bee\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper323d4c178bee\PharIo\Version\Version
    {
        return new \_PhpScoper323d4c178bee\PharIo\Version\Version($version);
    }
}
