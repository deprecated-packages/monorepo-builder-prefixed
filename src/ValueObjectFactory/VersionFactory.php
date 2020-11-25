<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperfa8ac9431c57\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperfa8ac9431c57\PharIo\Version\Version
    {
        return new \_PhpScoperfa8ac9431c57\PharIo\Version\Version($version);
    }
}
