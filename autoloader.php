<?php
function autoload($class) {
    if ($class == 'engine\PDO') return;
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = __DIR__.DIRECTORY_SEPARATOR.$class.'.class.php';
    if (is_file($file)) {
        require $file;
        return true;
    }
    return false;
}

spl_autoload_register('autoload');

?>
