<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper34ecf47f3155\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper34ecf47f3155\PharIo\Version\Version
    {
        return new \_PhpScoper34ecf47f3155\PharIo\Version\Version($version);
    }
}
