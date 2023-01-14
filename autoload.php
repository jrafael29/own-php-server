<?php
function my_autoloader($class) {
    $class = str_replace('\\', '/', $class);
    $class = $class . '.php';

    $directories = array("src");
    while (count($directories) > 0) {
        $dir = array_pop($directories);
        $files = scandir($dir);
        foreach ($files as $file) {
            if ($file == '.' || $file == '..') {
                continue;
            }
            $path = $dir . '/' . $file;
            if (is_dir($path)) {
                array_push($directories, $path);
            } elseif (substr($file, -4) === '.php' && $file == $class) {
                include $path;
                return;
            }
        }
    }
}

spl_autoload_register('my_autoloader');