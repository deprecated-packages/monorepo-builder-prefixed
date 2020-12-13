<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper3fb9389c704a\Symfony\Component\Yaml\Tag;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 * @author Guilhem N. <egetick@gmail.com>
 */
final class TaggedValue
{
    private $tag;
    private $value;
    public function __construct(string $tag, $value)
    {
        $this->tag = $tag;
        $this->value = $value;
    }
    public function getTag() : string
    {
        return $this->tag;
    }
    public function getValue()
    {
        return $this->value;
    }
}
