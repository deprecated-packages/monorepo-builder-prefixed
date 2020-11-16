<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper29d04ea58d14\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper29d04ea58d14\PharIo\Version\Version
    {
        return new \_PhpScoper29d04ea58d14\PharIo\Version\Version($version);
    }
}
