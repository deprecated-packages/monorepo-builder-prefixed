<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb2724c6b069f\Symfony\Component\Yaml;

/**
 * Escaper encapsulates escaping rules for single and double-quoted
 * YAML strings.
 *
 * @author Matthew Lewinski <matthew@lewinski.org>
 *
 * @internal
 */
class Escaper
{
    // Characters that would cause a dumped string to require double quoting.
    const REGEX_CHARACTER_TO_ESCAPE = "[\\x00-\\x1f]|| | | ";
    // Mapping arrays for escaping a double quoted string. The backslash is
    // first to ensure proper escaping because str_replace operates iteratively
    // on the input arrays. This ordering of the characters avoids the use of strtr,
    // which performs more slowly.
    private static $escapees = ['\\', '\\\\', '\\"', '"', "\0", "\1", "\2", "\3", "\4", "\5", "\6", "\7", "\10", "\t", "\n", "\v", "\f", "\r", "\16", "\17", "\20", "\21", "\22", "\23", "\24", "\25", "\26", "\27", "\30", "\31", "\32", "\33", "\34", "\35", "\36", "\37", "", " ", " ", " "];
    private static $escaped = ['\\\\', '\\"', '\\\\', '\\"', '\\0', '\\x01', '\\x02', '\\x03', '\\x04', '\\x05', '\\x06', '\\a', '\\b', '\\t', '\\n', '\\v', '\\f', '\\r', '\\x0e', '\\x0f', '\\x10', '\\x11', '\\x12', '\\x13', '\\x14', '\\x15', '\\x16', '\\x17', '\\x18', '\\x19', '\\x1a', '\\e', '\\x1c', '\\x1d', '\\x1e', '\\x1f', '\\N', '\\_', '\\L', '\\P'];
    /**
     * Determines if a PHP value would require double quoting in YAML.
     *
     * @param string $value A PHP value
     *
     * @return bool True if the value would require double quotes
     */
    public static function requiresDoubleQuoting(string $value) : bool
    {
        return 0 < \preg_match('/' . self::REGEX_CHARACTER_TO_ESCAPE . '/u', $value);
    }
    /**
     * Escapes and surrounds a PHP value with double quotes.
     *
     * @param string $value A PHP value
     *
     * @return string The quoted, escaped string
     */
    public static function escapeWithDoubleQuotes(string $value) : string
    {
        return \sprintf('"%s"', \str_replace(self::$escapees, self::$escaped, $value));
    }
    /**
     * Determines if a PHP value would require single quoting in YAML.
     *
     * @param string $value A PHP value
     *
     * @return bool True if the value would require single quotes
     */
    public static function requiresSingleQuoting(string $value) : bool
    {
        // Determines if a PHP value is entirely composed of a value that would
        // require single quoting in YAML.
        if (\in_array(\strtolower($value), ['null', '~', 'true', 'false', 'y', 'n', 'yes', 'no', 'on', 'off'])) {
            return \true;
        }
        // Determines if the PHP value contains any single characters that would
        // cause it to require single quoting in YAML.
        return 0 < \preg_match('/[ \\s \' " \\: \\{ \\} \\[ \\] , & \\* \\# \\?] | \\A[ \\- ? | < > = ! % @ ` ]/x', $value);
    }
    /**
     * Escapes and surrounds a PHP value with single quotes.
     *
     * @param string $value A PHP value
     *
     * @return string The quoted, escaped string
     */
    public static function escapeWithSingleQuotes(string $value) : string
    {
        return \sprintf("'%s'", \str_replace('\'', '\'\'', $value));
    }
}
