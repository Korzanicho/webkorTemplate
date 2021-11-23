<?php

spl_autoload_register('webkor_autoloader');

function webkor_autoloader($class) {
  $namespace = 'Webkor\Theme';
  
  if (strpos($class, $namespace) !== 0) {
    return;
  }

  $class = str_replace($namespace, '', $class);
  $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

  $directory = get_template_directory();
  $path = $directory . DIRECTORY_SEPARATOR . 'inc' . DIRECTORY_SEPARATOR . $class . '.php';

  if (file_exists($path)) {
    require_once($path);
  }
}