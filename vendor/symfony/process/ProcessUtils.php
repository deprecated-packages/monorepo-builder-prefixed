<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper9b7e9beaf949\Symfony\Component\Process;

use _PhpScoper9b7e9beaf949\Symfony\Component\Process\Exception\InvalidArgumentException;
/**
 * ProcessUtils is a bunch of utility methods.
 *
 * This class contains static methods only and is not meant to be instantiated.
 *
 * @author Martin Hasoň <martin.hason@gmail.com>
 */
class ProcessUtils
{
    /**
     * This class should not be instantiated.
     */
    private function __construct()
    {
    }
    /**
     * Validates and normalizes a Process input.
     *
     * @param string $caller The name of method call that validates the input
     * @param mixed  $input  The input to validate
     *
     * @return mixed The validated input
     *
     * @throws InvalidArgumentException In case the input is not valid
     */
    public static function validateInput(string $caller, $input)
    {
        if (null !== $input) {
            if (\is_resource($input)) {
                return $input;
            }
            if (\is_string($input)) {
                return $input;
            }
            if (\is_scalar($input)) {
                return (string) $input;
            }
            if ($input instanceof \_PhpScoper9b7e9beaf949\Symfony\Component\Process\Process) {
                return $input->getIterator($input::ITER_SKIP_ERR);
            }
            if ($input instanceof \Iterator) {
                return $input;
            }
            if ($input instanceof \Traversable) {
                return new \IteratorIterator($input);
            }
            throw new \_PhpScoper9b7e9beaf949\Symfony\Component\Process\Exception\InvalidArgumentException(\sprintf('"%s" only accepts strings, Traversable objects or stream resources.', $caller));
        }
        return $input;
    }
}
