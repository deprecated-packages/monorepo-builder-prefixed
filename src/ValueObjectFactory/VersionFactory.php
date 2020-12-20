<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperb2067b9f36f8\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperb2067b9f36f8\PharIo\Version\Version
    {
        return new \_PhpScoperb2067b9f36f8\PharIo\Version\Version($version);
    }
}
