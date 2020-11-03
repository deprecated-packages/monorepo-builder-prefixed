<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperee8f03533f8b\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperee8f03533f8b\PharIo\Version\Version
    {
        return new \_PhpScoperee8f03533f8b\PharIo\Version\Version($version);
    }
}
