<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere0f28e6b9bde\Symfony\Component\HttpFoundation\File\MimeType;

use _PhpScopere0f28e6b9bde\Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException;
use _PhpScopere0f28e6b9bde\Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;
use _PhpScopere0f28e6b9bde\Symfony\Component\Mime\FileinfoMimeTypeGuesser as NewFileinfoMimeTypeGuesser;
@\trigger_error(\sprintf('The "%s" class is deprecated since Symfony 4.3, use "%s" instead.', \_PhpScopere0f28e6b9bde\Symfony\Component\HttpFoundation\File\MimeType\FileinfoMimeTypeGuesser::class, \_PhpScopere0f28e6b9bde\Symfony\Component\Mime\FileinfoMimeTypeGuesser::class), \E_USER_DEPRECATED);
/**
 * Guesses the mime type using the PECL extension FileInfo.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated since Symfony 4.3, use {@link NewFileinfoMimeTypeGuesser} instead
 */
class FileinfoMimeTypeGuesser implements \_PhpScopere0f28e6b9bde\Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesserInterface
{
    private $magicFile;
    /**
     * @param string $magicFile A magic file to use with the finfo instance
     *
     * @see https://php.net/finfo-open
     */
    public function __construct(string $magicFile = null)
    {
        $this->magicFile = $magicFile;
    }
    /**
     * Returns whether this guesser is supported on the current OS/PHP setup.
     *
     * @return bool
     */
    public static function isSupported()
    {
        return \function_exists('finfo_open');
    }
    /**
     * {@inheritdoc}
     */
    public function guess($path)
    {
        if (!\is_file($path)) {
            throw new \_PhpScopere0f28e6b9bde\Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException($path);
        }
        if (!\is_readable($path)) {
            throw new \_PhpScopere0f28e6b9bde\Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException($path);
        }
        if (!self::isSupported()) {
            return null;
        }
        if (!($finfo = new \finfo(\FILEINFO_MIME_TYPE, $this->magicFile))) {
            return null;
        }
        return $finfo->file($path);
    }
}
