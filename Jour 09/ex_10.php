<?php
function autoloader($className) {
    require_once $className . '.class.php';
  }

  spl_autoload_register('autoloader');