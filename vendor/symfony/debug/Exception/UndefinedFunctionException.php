<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper7d1be3c5de07\Symfony\Component\Debug\Exception;

@\trigger_error(\sprintf('The "%s" class is deprecated since Symfony 4.4, use "%s" instead.', \_PhpScoper7d1be3c5de07\Symfony\Component\Debug\Exception\UndefinedFunctionException::class, \_PhpScoper7d1be3c5de07\Symfony\Component\ErrorHandler\Error\UndefinedFunctionError::class), \E_USER_DEPRECATED);
/**
 * Undefined Function Exception.
 *
 * @author Konstanton Myakshin <koc-dp@yandex.ru>
 *
 * @deprecated since Symfony 4.4, use Symfony\Component\ErrorHandler\Error\UndefinedFunctionError instead.
 */
class UndefinedFunctionException extends \_PhpScoper7d1be3c5de07\Symfony\Component\Debug\Exception\FatalErrorException
{
    public function __construct(string $message, \ErrorException $previous)
    {
        parent::__construct($message, $previous->getCode(), $previous->getSeverity(), $previous->getFile(), $previous->getLine(), null, \true, null, $previous->getPrevious());
        $this->setTrace($previous->getTrace());
    }
}
