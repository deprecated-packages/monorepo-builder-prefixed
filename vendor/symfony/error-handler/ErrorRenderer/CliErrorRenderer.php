<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper8a421ef9d4c6\Symfony\Component\ErrorHandler\ErrorRenderer;

use _PhpScoper8a421ef9d4c6\Symfony\Component\ErrorHandler\Exception\FlattenException;
use _PhpScoper8a421ef9d4c6\Symfony\Component\VarDumper\Cloner\VarCloner;
use _PhpScoper8a421ef9d4c6\Symfony\Component\VarDumper\Dumper\CliDumper;
// Help opcache.preload discover always-needed symbols
\class_exists(\_PhpScoper8a421ef9d4c6\Symfony\Component\VarDumper\Dumper\CliDumper::class);
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CliErrorRenderer implements \_PhpScoper8a421ef9d4c6\Symfony\Component\ErrorHandler\ErrorRenderer\ErrorRendererInterface
{
    /**
     * {@inheritdoc}
     */
    public function render(\Throwable $exception) : \_PhpScoper8a421ef9d4c6\Symfony\Component\ErrorHandler\Exception\FlattenException
    {
        $cloner = new \_PhpScoper8a421ef9d4c6\Symfony\Component\VarDumper\Cloner\VarCloner();
        $dumper = new class extends \_PhpScoper8a421ef9d4c6\Symfony\Component\VarDumper\Dumper\CliDumper
        {
            protected function supportsColors() : bool
            {
                $outputStream = $this->outputStream;
                $this->outputStream = \fopen('php://stdout', 'w');
                try {
                    return parent::supportsColors();
                } finally {
                    $this->outputStream = $outputStream;
                }
            }
        };
        return \_PhpScoper8a421ef9d4c6\Symfony\Component\ErrorHandler\Exception\FlattenException::createFromThrowable($exception)->setAsString($dumper->dump($cloner->cloneVar($exception), \true));
    }
}
