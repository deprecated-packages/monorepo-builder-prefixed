<?php

namespace _PhpScoper9ea409d355af;

interface SessionUpdateTimestampHandlerInterface
{
    /**
     * Checks if a session identifier already exists or not.
     *
     * @param string $key
     *
     * @return bool
     */
    public function validateId($key);
    /**
     * Updates the timestamp of a session when its data didn't change.
     *
     * @param string $key
     * @param string $val
     *
     * @return bool
     */
    public function updateTimestamp($key, $val);
}
\class_alias('_PhpScoper9ea409d355af\\SessionUpdateTimestampHandlerInterface', 'SessionUpdateTimestampHandlerInterface', \false);
