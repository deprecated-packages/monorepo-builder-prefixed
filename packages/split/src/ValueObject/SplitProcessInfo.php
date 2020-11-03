<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Split\ValueObject;

use _PhpScopera763b4be90d0\Symfony\Component\Process\Process;
final class SplitProcessInfo
{
    /**
     * @var string
     */
    private $remoteRepository;
    /**
     * @var string
     */
    private $localDirectory;
    /**
     * @var Process
     */
    private $process;
    public function __construct(\_PhpScopera763b4be90d0\Symfony\Component\Process\Process $process, string $localDirectory, string $remoteRepository)
    {
        $this->process = $process;
        $this->localDirectory = $localDirectory;
        $this->remoteRepository = $remoteRepository;
    }
    public function getProcess() : \_PhpScopera763b4be90d0\Symfony\Component\Process\Process
    {
        return $this->process;
    }
    public function getLocalDirectory() : string
    {
        return $this->localDirectory;
    }
    public function getRemoteRepository() : string
    {
        return $this->remoteRepository;
    }
}
