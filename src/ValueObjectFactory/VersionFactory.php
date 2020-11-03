<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperf1163522a13e\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperf1163522a13e\PharIo\Version\Version
    {
        return new \_PhpScoperf1163522a13e\PharIo\Version\Version($version);
    }
}
