<?php

function __autoload($className){
    $paths = array(
      'libraries/',
      'application/controllers/',
      'application/models/',
    );
    foreach($paths as $path){
      $file = $path.strtolower($className).".php";
        if(file_exists($file)) {
          require_once($file);
          break;
        }
    }
}

require('application/config/config.php');

$app = new Bootstrap();