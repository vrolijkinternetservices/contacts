<?php

class View {

  public function render($name) {
    require 'application/views/'.$name.'.php';
  }
}