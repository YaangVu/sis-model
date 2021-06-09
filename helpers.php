<?php

/**
 * Scan the api path, recursively including all PHP files
 *
 * @param string $dir
 * @param int    $depth (optional)
 * @param int    $maxDepth
 */
function load_php_file(string $dir, int $maxDepth = 0, int $depth = 0)
{
    if ($depth > $maxDepth && $maxDepth > 0) {
        return;
    }

    // require all php files
    $scan = glob("$dir/*");
    foreach ($scan as $path) {
        if (preg_match('/\.php$/', $path)) {
            require_once $path;
        } elseif (is_dir($path)) {
            load_php_file($path, $maxDepth, $depth + 1);
        }
    }
}
