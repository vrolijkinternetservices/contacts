<?php

class Controller {

    function __construct() {

      $this->request = new Request();
      $this->view = new View();
      $this->model = null;

      $file = 'application/models/'.strtolower(get_called_class()).'_model.php';

      if (file_exists($file)) {
        require $file;
        $class = get_called_class().'_Model';
        $this->model =new $class;
      }
    }
}