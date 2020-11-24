<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper963537526adf\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper963537526adf\PharIo\Version\Version
    {
        return new \_PhpScoper963537526adf\PharIo\Version\Version($version);
    }
}
