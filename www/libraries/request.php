<?php

class Request {

    function __construct() {
      $this->post_variables = $_POST;
      $this->get_variables = $_GET;
    }

    function post($str, $default = '') {
      return isset($this->post_variables[$str]) ? $this->post_variables[$str] : $default;
    }

    function get($str, $default = '') {
      return isset($this->get_variables[$str]) ? $this->get_variables[$str] : $default;
    }
}