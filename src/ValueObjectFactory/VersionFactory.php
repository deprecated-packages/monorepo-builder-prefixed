<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperc693a7d83f11\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperc693a7d83f11\PharIo\Version\Version
    {
        return new \_PhpScoperc693a7d83f11\PharIo\Version\Version($version);
    }
}
