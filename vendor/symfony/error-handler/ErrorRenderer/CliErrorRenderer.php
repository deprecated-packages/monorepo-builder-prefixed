<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper4c089bfbbc1b\Symfony\Component\ErrorHandler\ErrorRenderer;

use _PhpScoper4c089bfbbc1b\Symfony\Component\ErrorHandler\Exception\FlattenException;
use _PhpScoper4c089bfbbc1b\Symfony\Component\VarDumper\Cloner\VarCloner;
use _PhpScoper4c089bfbbc1b\Symfony\Component\VarDumper\Dumper\CliDumper;
// Help opcache.preload discover always-needed symbols
\class_exists(\_PhpScoper4c089bfbbc1b\Symfony\Component\VarDumper\Dumper\CliDumper::class);
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CliErrorRenderer implements \_PhpScoper4c089bfbbc1b\Symfony\Component\ErrorHandler\ErrorRenderer\ErrorRendererInterface
{
    /**
     * {@inheritdoc}
     */
    public function render(\Throwable $exception) : \_PhpScoper4c089bfbbc1b\Symfony\Component\ErrorHandler\Exception\FlattenException
    {
        $cloner = new \_PhpScoper4c089bfbbc1b\Symfony\Component\VarDumper\Cloner\VarCloner();
        $dumper = new class extends \_PhpScoper4c089bfbbc1b\Symfony\Component\VarDumper\Dumper\CliDumper
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
        return \_PhpScoper4c089bfbbc1b\Symfony\Component\ErrorHandler\Exception\FlattenException::createFromThrowable($exception)->setAsString($dumper->dump($cloner->cloneVar($exception), \true));
    }
}
