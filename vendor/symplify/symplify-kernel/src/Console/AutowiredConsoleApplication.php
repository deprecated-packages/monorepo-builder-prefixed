<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\Console;

use _PhpScoper66a1b4bf441c\Symfony\Component\Console\Command\Command;
/**
 * @see \Symplify\SymplifyKernel\Tests\Console\AbstractSymplifyConsoleApplication\AutowiredConsoleApplicationTest
 */
final class AutowiredConsoleApplication extends \Symplify\SymplifyKernel\Console\AbstractSymplifyConsoleApplication
{
    /**
     * @param Command[] $commands
     */
    public function __construct(array $commands, string $name = 'UNKNOWN', string $version = 'UNKNOWN')
    {
        parent::__construct($commands, $name, $version);
    }
}
