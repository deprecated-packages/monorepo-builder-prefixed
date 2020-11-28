<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Release\Configuration;

use _PhpScoperbe77f3b0e77d\PharIo\Version\Version;
use _PhpScoperbe77f3b0e77d\Symfony\Component\Console\Input\InputInterface;
use Symplify\MonorepoBuilder\Release\Version\VersionFactory;
use Symplify\MonorepoBuilder\ValueObject\Option;
final class VersionResolver
{
    /**
     * @var VersionFactory
     */
    private $versionFactory;
    public function __construct(\Symplify\MonorepoBuilder\Release\Version\VersionFactory $versionFactory)
    {
        $this->versionFactory = $versionFactory;
    }
    public function resolveVersion(\_PhpScoperbe77f3b0e77d\Symfony\Component\Console\Input\InputInterface $input, string $stage) : \_PhpScoperbe77f3b0e77d\PharIo\Version\Version
    {
        /** @var string $versionArgument */
        $versionArgument = $input->getArgument(\Symplify\MonorepoBuilder\ValueObject\Option::VERSION);
        return $this->versionFactory->createValidVersion($versionArgument, $stage);
    }
}
