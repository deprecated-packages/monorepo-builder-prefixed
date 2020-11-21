<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdbf49b510e11\Symfony\Component\Mime\Part;

use _PhpScoperdbf49b510e11\Symfony\Component\Mime\Message;
use _PhpScoperdbf49b510e11\Symfony\Component\Mime\RawMessage;
/**
 * @final
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
class MessagePart extends \_PhpScoperdbf49b510e11\Symfony\Component\Mime\Part\DataPart
{
    private $message;
    public function __construct(\_PhpScoperdbf49b510e11\Symfony\Component\Mime\RawMessage $message)
    {
        if ($message instanceof \_PhpScoperdbf49b510e11\Symfony\Component\Mime\Message) {
            $name = $message->getHeaders()->getHeaderBody('Subject') . '.eml';
        } else {
            $name = 'email.eml';
        }
        parent::__construct('', $name);
        $this->message = $message;
    }
    public function getMediaType() : string
    {
        return 'message';
    }
    public function getMediaSubtype() : string
    {
        return 'rfc822';
    }
    public function getBody() : string
    {
        return $this->message->toString();
    }
    public function bodyToString() : string
    {
        return $this->getBody();
    }
    public function bodyToIterable() : iterable
    {
        return $this->message->toIterable();
    }
}
