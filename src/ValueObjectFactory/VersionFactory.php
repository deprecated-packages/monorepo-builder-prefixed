<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperc41e8050ff3f\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperc41e8050ff3f\PharIo\Version\Version
    {
        return new \_PhpScoperc41e8050ff3f\PharIo\Version\Version($version);
    }
}
