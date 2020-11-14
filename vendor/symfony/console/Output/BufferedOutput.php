<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper5861d582764b\Symfony\Component\Console\Output;

/**
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
class BufferedOutput extends \_PhpScoper5861d582764b\Symfony\Component\Console\Output\Output
{
    private $buffer = '';
    /**
     * Empties buffer and returns its content.
     *
     * @return string
     */
    public function fetch()
    {
        $content = $this->buffer;
        $this->buffer = '';
        return $content;
    }
    /**
     * {@inheritdoc}
     */
    protected function doWrite($message, $newline)
    {
        $this->buffer .= $message;
        if ($newline) {
            $this->buffer .= \PHP_EOL;
        }
    }
}
