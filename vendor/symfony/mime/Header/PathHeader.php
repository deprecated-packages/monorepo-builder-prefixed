<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc9dc9dec1b4a\Symfony\Component\Mime\Header;

use _PhpScoperc9dc9dec1b4a\Symfony\Component\Mime\Address;
use _PhpScoperc9dc9dec1b4a\Symfony\Component\Mime\Exception\RfcComplianceException;
/**
 * A Path Header, such a Return-Path (one address).
 *
 * @author Chris Corbyn
 *
 * @experimental in 4.3
 */
final class PathHeader extends \_PhpScoperc9dc9dec1b4a\Symfony\Component\Mime\Header\AbstractHeader
{
    private $address;
    public function __construct(string $name, \_PhpScoperc9dc9dec1b4a\Symfony\Component\Mime\Address $address)
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
     * @return Address
     */
    public function getBody()
    {
        return $this->getAddress();
    }
    public function setAddress(\_PhpScoperc9dc9dec1b4a\Symfony\Component\Mime\Address $address)
    {
        $this->address = $address;
    }
    public function getAddress() : \_PhpScoperc9dc9dec1b4a\Symfony\Component\Mime\Address
    {
        return $this->address;
    }
    public function getBodyAsString() : string
    {
        return '<' . $this->address->toString() . '>';
    }
}
