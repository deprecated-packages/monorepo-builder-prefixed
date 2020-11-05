<?php

declare (strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf78d2b40800e\SebastianBergmann\Diff;

/**
 * Unified diff parser.
 */
final class Parser
{
    /**
     * @param string $string
     *
     * @return Diff[]
     */
    public function parse(string $string) : array
    {
        $lines = \preg_split('(\\r\\n|\\r|\\n)', $string);
        if (!empty($lines) && $lines[\count($lines) - 1] === '') {
            \array_pop($lines);
        }
        $lineCount = \count($lines);
        $diffs = [];
        $diff = null;
        $collected = [];
        for ($i = 0; $i < $lineCount; ++$i) {
            if (\preg_match('(^---\\s+(?P<file>\\S+))', $lines[$i], $fromMatch) && \preg_match('(^\\+\\+\\+\\s+(?P<file>\\S+))', $lines[$i + 1], $toMatch)) {
                if ($diff !== null) {
                    $this->parseFileDiff($diff, $collected);
                    $diffs[] = $diff;
                    $collected = [];
                }
                $diff = new \_PhpScoperf78d2b40800e\SebastianBergmann\Diff\Diff($fromMatch['file'], $toMatch['file']);
                ++$i;
            } else {
                if (\preg_match('/^(?:diff --git |index [\\da-f\\.]+|[+-]{3} [ab])/', $lines[$i])) {
                    continue;
                }
                $collected[] = $lines[$i];
            }
        }
        if ($diff !== null && \count($collected)) {
            $this->parseFileDiff($diff, $collected);
            $diffs[] = $diff;
        }
        return $diffs;
    }
    private function parseFileDiff(\_PhpScoperf78d2b40800e\SebastianBergmann\Diff\Diff $diff, array $lines) : void
    {
        $chunks = [];
        $chunk = null;
        foreach ($lines as $line) {
            if (\preg_match('/^@@\\s+-(?P<start>\\d+)(?:,\\s*(?P<startrange>\\d+))?\\s+\\+(?P<end>\\d+)(?:,\\s*(?P<endrange>\\d+))?\\s+@@/', $line, $match)) {
                $chunk = new \_PhpScoperf78d2b40800e\SebastianBergmann\Diff\Chunk((int) $match['start'], isset($match['startrange']) ? \max(1, (int) $match['startrange']) : 1, (int) $match['end'], isset($match['endrange']) ? \max(1, (int) $match['endrange']) : 1);
                $chunks[] = $chunk;
                $diffLines = [];
                continue;
            }
            if (\preg_match('/^(?P<type>[+ -])?(?P<line>.*)/', $line, $match)) {
                $type = \_PhpScoperf78d2b40800e\SebastianBergmann\Diff\Line::UNCHANGED;
                if ($match['type'] === '+') {
                    $type = \_PhpScoperf78d2b40800e\SebastianBergmann\Diff\Line::ADDED;
                } elseif ($match['type'] === '-') {
                    $type = \_PhpScoperf78d2b40800e\SebastianBergmann\Diff\Line::REMOVED;
                }
                $diffLines[] = new \_PhpScoperf78d2b40800e\SebastianBergmann\Diff\Line($type, $match['line']);
                if (null !== $chunk) {
                    $chunk->setLines($diffLines);
                }
            }
        }
        $diff->setChunks($chunks);
    }
}
