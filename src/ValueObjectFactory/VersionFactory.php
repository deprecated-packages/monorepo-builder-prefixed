<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperb2724c6b069f\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperb2724c6b069f\PharIo\Version\Version
    {
        return new \_PhpScoperb2724c6b069f\PharIo\Version\Version($version);
    }
}
