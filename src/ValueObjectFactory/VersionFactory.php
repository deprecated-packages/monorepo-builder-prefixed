<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper95efb8ddea2f\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper95efb8ddea2f\PharIo\Version\Version
    {
        return new \_PhpScoper95efb8ddea2f\PharIo\Version\Version($version);
    }
}
