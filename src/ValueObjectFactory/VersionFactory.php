<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperaf523e5605cc\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperaf523e5605cc\PharIo\Version\Version
    {
        return new \_PhpScoperaf523e5605cc\PharIo\Version\Version($version);
    }
}
