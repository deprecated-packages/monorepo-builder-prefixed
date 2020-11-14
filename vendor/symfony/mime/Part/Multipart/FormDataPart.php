<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperef4638f5d8b1\Symfony\Component\Mime\Part\Multipart;

use _PhpScoperef4638f5d8b1\Symfony\Component\Mime\Exception\InvalidArgumentException;
use _PhpScoperef4638f5d8b1\Symfony\Component\Mime\Part\AbstractMultipartPart;
use _PhpScoperef4638f5d8b1\Symfony\Component\Mime\Part\DataPart;
use _PhpScoperef4638f5d8b1\Symfony\Component\Mime\Part\TextPart;
/**
 * Implements RFC 7578.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class FormDataPart extends \_PhpScoperef4638f5d8b1\Symfony\Component\Mime\Part\AbstractMultipartPart
{
    private $fields = [];
    /**
     * @param (string|array|DataPart)[] $fields
     */
    public function __construct(array $fields = [])
    {
        parent::__construct();
        foreach ($fields as $name => $value) {
            if (!\is_string($value) && !\is_array($value) && !$value instanceof \_PhpScoperef4638f5d8b1\Symfony\Component\Mime\Part\TextPart) {
                throw new \_PhpScoperef4638f5d8b1\Symfony\Component\Mime\Exception\InvalidArgumentException(\sprintf('A form field value can only be a string, an array, or an instance of TextPart ("%s" given).', \is_object($value) ? \get_class($value) : \gettype($value)));
            }
            $this->fields[$name] = $value;
        }
        // HTTP does not support \r\n in header values
        $this->getHeaders()->setMaxLineLength(\PHP_INT_MAX);
    }
    public function getMediaSubtype() : string
    {
        return 'form-data';
    }
    public function getParts() : array
    {
        return $this->prepareFields($this->fields);
    }
    private function prepareFields(array $fields) : array
    {
        $values = [];
        \array_walk_recursive($fields, function ($item, $key) use(&$values) {
            if (!\is_array($item)) {
                $values[] = $this->preparePart($key, $item);
            }
        });
        return $values;
    }
    private function preparePart($name, $value) : \_PhpScoperef4638f5d8b1\Symfony\Component\Mime\Part\TextPart
    {
        if (\is_string($value)) {
            return $this->configurePart($name, new \_PhpScoperef4638f5d8b1\Symfony\Component\Mime\Part\TextPart($value, 'utf-8', 'plain', '8bit'));
        }
        return $this->configurePart($name, $value);
    }
    private function configurePart(string $name, \_PhpScoperef4638f5d8b1\Symfony\Component\Mime\Part\TextPart $part) : \_PhpScoperef4638f5d8b1\Symfony\Component\Mime\Part\TextPart
    {
        static $r;
        if (null === $r) {
            $r = new \ReflectionProperty(\_PhpScoperef4638f5d8b1\Symfony\Component\Mime\Part\TextPart::class, 'encoding');
            $r->setAccessible(\true);
        }
        $part->setDisposition('form-data');
        $part->setName($name);
        // HTTP does not support \r\n in header values
        $part->getHeaders()->setMaxLineLength(\PHP_INT_MAX);
        $r->setValue($part, '8bit');
        return $part;
    }
}
