<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper50e98fdc5bc0\Symfony\Component\Mime\Header;

use _PhpScoper50e98fdc5bc0\Symfony\Component\Mime\Address;
use _PhpScoper50e98fdc5bc0\Symfony\Component\Mime\Exception\RfcComplianceException;
use _PhpScoper50e98fdc5bc0\Symfony\Component\Mime\NamedAddress;
/**
 * A Mailbox MIME Header for something like Sender (one named address).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class MailboxHeader extends \_PhpScoper50e98fdc5bc0\Symfony\Component\Mime\Header\AbstractHeader
{
    private $address;
    public function __construct(string $name, \_PhpScoper50e98fdc5bc0\Symfony\Component\Mime\Address $address)
    {
        parent::__construct($name);
        $this->setAddress($address);
    }
    /**
     * @param Address $body
     *
     * @throws RfcComplianceException
     */
    public function setBody($body)
    {
        $this->setAddress($body);
    }
    /**
     * @throws RfcComplianceException
     *
     * @return Address
     */
    public function getBody()
    {
        return $this->getAddress();
    }
    /**
     * @throws RfcComplianceException
     */
    public function setAddress(\_PhpScoper50e98fdc5bc0\Symfony\Component\Mime\Address $address)
    {
        $this->address = $address;
    }
    /**
     * @return Address
     */
    public function getAddress() : \_PhpScoper50e98fdc5bc0\Symfony\Component\Mime\Address
    {
        return $this->address;
    }
    public function getBodyAsString() : string
    {
        $str = $this->address->getEncodedAddress();
        if ($this->address instanceof \_PhpScoper50e98fdc5bc0\Symfony\Component\Mime\NamedAddress && ($name = $this->address->getName())) {
            $str = $this->createPhrase($this, $name, $this->getCharset(), \true) . ' <' . $str . '>';
        }
        return $str;
    }
    /**
     * Redefine the encoding requirements for an address.
     *
     * All "specials" must be encoded as the full header value will not be quoted
     *
     * @see RFC 2822 3.2.1
     */
    protected function tokenNeedsEncoding(string $token) : bool
    {
        return \preg_match('/[()<>\\[\\]:;@\\,."]/', $token) || parent::tokenNeedsEncoding($token);
    }
}
