<?php
  function urlFor($scriptPath) {
    // add the leading '/' if not present
    if($scriptPath[0] != '/') {
      $scriptPath = "/" . $scriptPath;
    }
    return WEB_ROOT . $scriptPath;
  }

  function encode($string="") {
    return urlencode($string);
  }

  function rawEncode($string="") {
    return rawurlencode($string);
  }

  function htmlChars($string="") {
    return htmlspecialchars($string);
  }

  function error404() {
    header($_SERVER['SERVER_PROTOCOL'] . " 404 Not Found");
    exit();
  }

  function error500() {
    header($_SERVER['SERVER_PROTOCOL'] . " 500 Internal Server Error");
    exit();
  }

  function redirectTo($location) {
    header("Location: " . $location);
    exit();
  }
