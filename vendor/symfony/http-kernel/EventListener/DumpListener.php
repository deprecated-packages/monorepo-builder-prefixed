<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper4ef7335528ad\Symfony\Component\HttpKernel\EventListener;

use _PhpScoper4ef7335528ad\Symfony\Component\Console\ConsoleEvents;
use _PhpScoper4ef7335528ad\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoper4ef7335528ad\Symfony\Component\VarDumper\Cloner\ClonerInterface;
use _PhpScoper4ef7335528ad\Symfony\Component\VarDumper\Dumper\DataDumperInterface;
use _PhpScoper4ef7335528ad\Symfony\Component\VarDumper\Server\Connection;
use _PhpScoper4ef7335528ad\Symfony\Component\VarDumper\VarDumper;
/**
 * Configures dump() handler.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DumpListener implements \_PhpScoper4ef7335528ad\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    private $cloner;
    private $dumper;
    private $connection;
    public function __construct(\_PhpScoper4ef7335528ad\Symfony\Component\VarDumper\Cloner\ClonerInterface $cloner, \_PhpScoper4ef7335528ad\Symfony\Component\VarDumper\Dumper\DataDumperInterface $dumper, \_PhpScoper4ef7335528ad\Symfony\Component\VarDumper\Server\Connection $connection = null)
    {
        $this->cloner = $cloner;
        $this->dumper = $dumper;
        $this->connection = $connection;
    }
    public function configure()
    {
        $cloner = $this->cloner;
        $dumper = $this->dumper;
        $connection = $this->connection;
        \_PhpScoper4ef7335528ad\Symfony\Component\VarDumper\VarDumper::setHandler(static function ($var) use($cloner, $dumper, $connection) {
            $data = $cloner->cloneVar($var);
            if (!$connection || !$connection->write($data)) {
                $dumper->dump($data);
            }
        });
    }
    public static function getSubscribedEvents()
    {
        if (!\class_exists(\_PhpScoper4ef7335528ad\Symfony\Component\Console\ConsoleEvents::class)) {
            return [];
        }
        // Register early to have a working dump() as early as possible
        return [\_PhpScoper4ef7335528ad\Symfony\Component\Console\ConsoleEvents::COMMAND => ['configure', 1024]];
    }
}
