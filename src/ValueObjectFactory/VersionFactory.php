<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper4ef7335528ad\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper4ef7335528ad\PharIo\Version\Version
    {
        return new \_PhpScoper4ef7335528ad\PharIo\Version\Version($version);
    }
}
