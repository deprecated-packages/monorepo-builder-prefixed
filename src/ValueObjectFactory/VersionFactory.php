<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper43a95e2f69bc\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper43a95e2f69bc\PharIo\Version\Version
    {
        return new \_PhpScoper43a95e2f69bc\PharIo\Version\Version($version);
    }
}
