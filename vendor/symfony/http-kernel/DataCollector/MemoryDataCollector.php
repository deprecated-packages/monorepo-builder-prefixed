<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf78d2b40800e\Symfony\Component\HttpKernel\DataCollector;

use _PhpScoperf78d2b40800e\Symfony\Component\HttpFoundation\Request;
use _PhpScoperf78d2b40800e\Symfony\Component\HttpFoundation\Response;
/**
 * MemoryDataCollector.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.4
 */
class MemoryDataCollector extends \_PhpScoperf78d2b40800e\Symfony\Component\HttpKernel\DataCollector\DataCollector implements \_PhpScoperf78d2b40800e\Symfony\Component\HttpKernel\DataCollector\LateDataCollectorInterface
{
    public function __construct()
    {
        $this->reset();
    }
    /**
     * {@inheritdoc}
     *
     * @param \Throwable|null $exception
     */
    public function collect(\_PhpScoperf78d2b40800e\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperf78d2b40800e\Symfony\Component\HttpFoundation\Response $response)
    {
        $this->updateMemoryUsage();
    }
    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        $this->data = ['memory' => 0, 'memory_limit' => $this->convertToBytes(\ini_get('memory_limit'))];
    }
    /**
     * {@inheritdoc}
     */
    public function lateCollect()
    {
        $this->updateMemoryUsage();
    }
    /**
     * Gets the memory.
     *
     * @return int The memory
     */
    public function getMemory()
    {
        return $this->data['memory'];
    }
    /**
     * Gets the PHP memory limit.
     *
     * @return int The memory limit
     */
    public function getMemoryLimit()
    {
        return $this->data['memory_limit'];
    }
    /**
     * Updates the memory usage data.
     */
    public function updateMemoryUsage()
    {
        $this->data['memory'] = \memory_get_peak_usage(\true);
    }
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'memory';
    }
    private function convertToBytes(string $memoryLimit) : int
    {
        if ('-1' === $memoryLimit) {
            return -1;
        }
        $memoryLimit = \strtolower($memoryLimit);
        $max = \strtolower(\ltrim($memoryLimit, '+'));
        if (0 === \strpos($max, '0x')) {
            $max = \intval($max, 16);
        } elseif (0 === \strpos($max, '0')) {
            $max = \intval($max, 8);
        } else {
            $max = (int) $max;
        }
        switch (\substr($memoryLimit, -1)) {
            case 't':
                $max *= 1024;
            // no break
            case 'g':
                $max *= 1024;
            // no break
            case 'm':
                $max *= 1024;
            // no break
            case 'k':
                $max *= 1024;
        }
        return $max;
    }
}
