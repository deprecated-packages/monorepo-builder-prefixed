<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdfdcb3d4cca0\Symfony\Component\Mime\Encoder;

/**
 * @author Chris Corbyn
 *
 * @experimental in 4.3
 */
interface ContentEncoderInterface extends \_PhpScoperdfdcb3d4cca0\Symfony\Component\Mime\Encoder\EncoderInterface
{
    /**
     * Encodes the stream to a Generator.
     *
     * @param resource $stream
     */
    public function encodeByteStream($stream, int $maxLineLength = 0) : iterable;
    /**
     * Gets the MIME name of this content encoding scheme.
     */
    public function getName() : string;
}