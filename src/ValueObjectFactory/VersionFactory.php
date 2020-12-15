<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperc7f1624089a3\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperc7f1624089a3\PharIo\Version\Version
    {
        return new \_PhpScoperc7f1624089a3\PharIo\Version\Version($version);
    }
}
