<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperf8eaec7affbd\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperf8eaec7affbd\PharIo\Version\Version
    {
        return new \_PhpScoperf8eaec7affbd\PharIo\Version\Version($version);
    }
}
