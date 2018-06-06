<?php

class Bootstrap {

  function __construct() {

    $url = empty($_GET['url']) ? 'contacts' : rtrim($_GET['url'], '/');
    $url = explode('/', $url);

    $file = 'application/controllers/'.$url[0].'.php';

    if (!file_exists($file)) {
      require 'application/controllers/error.php';
      $error = new Error;
      return;
    }

    require $file;
    $controller = new $url[0];

    if (!isset($url[1]))  $url[1] = 'index';

    if (isset($url[3])) {
      $controller->{$url[1]}($url[2], $url[3]);
    }
    elseif (isset($url[2])) {
      $controller->{$url[1]}($url[2]);
    }
    else {
      $controller->{$url[1]}();
    }
  }

}