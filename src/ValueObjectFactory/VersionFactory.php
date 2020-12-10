<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper37010f304ea9\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper37010f304ea9\PharIo\Version\Version
    {
        return new \_PhpScoper37010f304ea9\PharIo\Version\Version($version);
    }
}
