<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbe77f3b0e77d\Symfony\Component\ErrorHandler\ErrorRenderer;

use _PhpScoperbe77f3b0e77d\Symfony\Component\ErrorHandler\Exception\FlattenException;
use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\RequestStack;
use _PhpScoperbe77f3b0e77d\Symfony\Component\Serializer\Exception\NotEncodableValueException;
use _PhpScoperbe77f3b0e77d\Symfony\Component\Serializer\SerializerInterface;
/**
 * Formats an exception using Serializer for rendering.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class SerializerErrorRenderer implements \_PhpScoperbe77f3b0e77d\Symfony\Component\ErrorHandler\ErrorRenderer\ErrorRendererInterface
{
    private $serializer;
    private $format;
    private $fallbackErrorRenderer;
    /**
     * @param string|callable(FlattenException) $format The format as a string or a callable that should return it
     */
    public function __construct(\_PhpScoperbe77f3b0e77d\Symfony\Component\Serializer\SerializerInterface $serializer, $format, \_PhpScoperbe77f3b0e77d\Symfony\Component\ErrorHandler\ErrorRenderer\ErrorRendererInterface $fallbackErrorRenderer = null)
    {
        if (!\is_string($format) && !\is_callable($format)) {
            throw new \TypeError(\sprintf('Argument 2 passed to %s() must be a string or a callable, %s given.', __METHOD__, \is_object($format) ? \get_class($format) : \gettype($format)));
        }
        $this->serializer = $serializer;
        $this->format = $format;
        $this->fallbackErrorRenderer = $fallbackErrorRenderer ?? new \_PhpScoperbe77f3b0e77d\Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer();
    }
    /**
     * {@inheritdoc}
     */
    public function render(\Throwable $exception) : \_PhpScoperbe77f3b0e77d\Symfony\Component\ErrorHandler\Exception\FlattenException
    {
        $flattenException = \_PhpScoperbe77f3b0e77d\Symfony\Component\ErrorHandler\Exception\FlattenException::createFromThrowable($exception);
        try {
            $format = \is_string($this->format) ? $this->format : ($this->format)($flattenException);
            return $flattenException->setAsString($this->serializer->serialize($flattenException, $format, ['exception' => $exception]));
        } catch (\_PhpScoperbe77f3b0e77d\Symfony\Component\Serializer\Exception\NotEncodableValueException $e) {
            return $this->fallbackErrorRenderer->render($exception);
        }
    }
    public static function getPreferredFormat(\_PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\RequestStack $requestStack) : \Closure
    {
        return static function () use($requestStack) {
            if (!($request = $requestStack->getCurrentRequest())) {
                throw new \_PhpScoperbe77f3b0e77d\Symfony\Component\Serializer\Exception\NotEncodableValueException();
            }
            return $request->getPreferredFormat();
        };
    }
}
