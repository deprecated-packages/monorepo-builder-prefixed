<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera5e5d165d78c\Symfony\Component\Debug\Exception;

@\trigger_error(\sprintf('The "%s" class is deprecated since Symfony 4.4.', \_PhpScopera5e5d165d78c\Symfony\Component\Debug\Exception\FatalThrowableError::class), \E_USER_DEPRECATED);
/**
 * Fatal Throwable Error.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @deprecated since Symfony 4.4
 */
class FatalThrowableError extends \_PhpScopera5e5d165d78c\Symfony\Component\Debug\Exception\FatalErrorException
{
    private $originalClassName;
    public function __construct(\Throwable $e)
    {
        $this->originalClassName = \get_class($e);
        if ($e instanceof \ParseError) {
            $severity = \E_PARSE;
        } elseif ($e instanceof \TypeError) {
            $severity = \E_RECOVERABLE_ERROR;
        } else {
            $severity = \E_ERROR;
        }
        \ErrorException::__construct($e->getMessage(), $e->getCode(), $severity, $e->getFile(), $e->getLine(), $e->getPrevious());
        $this->setTrace($e->getTrace());
    }
    public function getOriginalClassName() : string
    {
        return $this->originalClassName;
    }
}
