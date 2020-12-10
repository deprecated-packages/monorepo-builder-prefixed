<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperf4d251e01a80\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperf4d251e01a80\PharIo\Version\Version
    {
        return new \_PhpScoperf4d251e01a80\PharIo\Version\Version($version);
    }
}
