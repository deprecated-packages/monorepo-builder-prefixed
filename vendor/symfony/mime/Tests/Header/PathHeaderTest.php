<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera2bd9a9af620\Symfony\Component\Mime\Tests\Header;

use _PhpScopera2bd9a9af620\PHPUnit\Framework\TestCase;
use _PhpScopera2bd9a9af620\Symfony\Component\Mime\Address;
use _PhpScopera2bd9a9af620\Symfony\Component\Mime\Header\PathHeader;
class PathHeaderTest extends \_PhpScopera2bd9a9af620\PHPUnit\Framework\TestCase
{
    public function testSingleAddressCanBeSetAndFetched()
    {
        $header = new \_PhpScopera2bd9a9af620\Symfony\Component\Mime\Header\PathHeader('Return-Path', $address = new \_PhpScopera2bd9a9af620\Symfony\Component\Mime\Address('chris@swiftmailer.org'));
        $this->assertEquals($address, $header->getAddress());
    }
    /**
     * @expectedException \Exception
     */
    public function testAddressMustComplyWithRfc2822()
    {
        $header = new \_PhpScopera2bd9a9af620\Symfony\Component\Mime\Header\PathHeader('Return-Path', new \_PhpScopera2bd9a9af620\Symfony\Component\Mime\Address('chr is@swiftmailer.org'));
    }
    public function testValueIsAngleAddrWithValidAddress()
    {
        /* -- RFC 2822, 3.6.7.
        
                    return          =       "Return-Path:" path CRLF
        
                    path            =       ([CFWS] "<" ([CFWS] / addr-spec) ">" [CFWS]) /
                                                                    obs-path
                 */
        $header = new \_PhpScopera2bd9a9af620\Symfony\Component\Mime\Header\PathHeader('Return-Path', new \_PhpScopera2bd9a9af620\Symfony\Component\Mime\Address('chris@swiftmailer.org'));
        $this->assertEquals('<chris@swiftmailer.org>', $header->getBodyAsString());
    }
    public function testAddressIsIdnEncoded()
    {
        $header = new \_PhpScopera2bd9a9af620\Symfony\Component\Mime\Header\PathHeader('Return-Path', new \_PhpScopera2bd9a9af620\Symfony\Component\Mime\Address('chris@swïftmailer.org'));
        $this->assertEquals('<chris@xn--swftmailer-78a.org>', $header->getBodyAsString());
    }
    /**
     * @expectedException \Symfony\Component\Mime\Exception\AddressEncoderException
     */
    public function testAddressMustBeEncodable()
    {
        $header = new \_PhpScopera2bd9a9af620\Symfony\Component\Mime\Header\PathHeader('Return-Path', new \_PhpScopera2bd9a9af620\Symfony\Component\Mime\Address('chrïs@swiftmailer.org'));
        $header->getBodyAsString();
    }
    public function testSetBody()
    {
        $header = new \_PhpScopera2bd9a9af620\Symfony\Component\Mime\Header\PathHeader('Return-Path', new \_PhpScopera2bd9a9af620\Symfony\Component\Mime\Address('foo@example.com'));
        $header->setBody($address = new \_PhpScopera2bd9a9af620\Symfony\Component\Mime\Address('foo@bar.tld'));
        $this->assertEquals($address, $header->getAddress());
    }
    public function testGetBody()
    {
        $header = new \_PhpScopera2bd9a9af620\Symfony\Component\Mime\Header\PathHeader('Return-Path', $address = new \_PhpScopera2bd9a9af620\Symfony\Component\Mime\Address('foo@bar.tld'));
        $this->assertEquals($address, $header->getBody());
    }
    public function testToString()
    {
        $header = new \_PhpScopera2bd9a9af620\Symfony\Component\Mime\Header\PathHeader('Return-Path', new \_PhpScopera2bd9a9af620\Symfony\Component\Mime\Address('chris@swiftmailer.org'));
        $this->assertEquals('Return-Path: <chris@swiftmailer.org>', $header->toString());
    }
}
