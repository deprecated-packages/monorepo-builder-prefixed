<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperb397db9687c8\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperb397db9687c8\PharIo\Version\Version
    {
        return new \_PhpScoperb397db9687c8\PharIo\Version\Version($version);
    }
}
