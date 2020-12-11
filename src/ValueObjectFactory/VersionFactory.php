<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper9a38f5ee6cbc\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper9a38f5ee6cbc\PharIo\Version\Version
    {
        return new \_PhpScoper9a38f5ee6cbc\PharIo\Version\Version($version);
    }
}
