<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera2ff5fd2b59c\Symfony\Component\ErrorHandler\ErrorRenderer;

use _PhpScopera2ff5fd2b59c\Symfony\Component\ErrorHandler\Exception\FlattenException;
use _PhpScopera2ff5fd2b59c\Symfony\Component\VarDumper\Cloner\VarCloner;
use _PhpScopera2ff5fd2b59c\Symfony\Component\VarDumper\Dumper\CliDumper;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CliErrorRenderer implements \_PhpScopera2ff5fd2b59c\Symfony\Component\ErrorHandler\ErrorRenderer\ErrorRendererInterface
{
    /**
     * {@inheritdoc}
     */
    public function render(\Throwable $exception) : \_PhpScopera2ff5fd2b59c\Symfony\Component\ErrorHandler\Exception\FlattenException
    {
        $cloner = new \_PhpScopera2ff5fd2b59c\Symfony\Component\VarDumper\Cloner\VarCloner();
        $dumper = new class extends \_PhpScopera2ff5fd2b59c\Symfony\Component\VarDumper\Dumper\CliDumper
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
        return \_PhpScopera2ff5fd2b59c\Symfony\Component\ErrorHandler\Exception\FlattenException::createFromThrowable($exception)->setAsString($dumper->dump($cloner->cloneVar($exception), \true));
    }
}
