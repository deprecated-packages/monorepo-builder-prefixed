<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper96a284484937\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper96a284484937\PharIo\Version\Version
    {
        return new \_PhpScoper96a284484937\PharIo\Version\Version($version);
    }
}
