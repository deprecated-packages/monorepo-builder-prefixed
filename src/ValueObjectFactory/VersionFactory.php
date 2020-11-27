<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper5818bcaf1010\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper5818bcaf1010\PharIo\Version\Version
    {
        return new \_PhpScoper5818bcaf1010\PharIo\Version\Version($version);
    }
}
