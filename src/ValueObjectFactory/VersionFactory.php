<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper7334003ee560\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper7334003ee560\PharIo\Version\Version
    {
        return new \_PhpScoper7334003ee560\PharIo\Version\Version($version);
    }
}
