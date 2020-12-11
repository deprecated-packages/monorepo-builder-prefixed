<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper354754c20063\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper354754c20063\PharIo\Version\Version
    {
        return new \_PhpScoper354754c20063\PharIo\Version\Version($version);
    }
}
