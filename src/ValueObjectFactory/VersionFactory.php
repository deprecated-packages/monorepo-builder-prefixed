<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper1832ada183f6\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper1832ada183f6\PharIo\Version\Version
    {
        return new \_PhpScoper1832ada183f6\PharIo\Version\Version($version);
    }
}
