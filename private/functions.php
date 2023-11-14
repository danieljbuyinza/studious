<?php
  function urlFor($fileInPublic) {
    // add the leading '/' if not present
    if($fileInPublic[0] != '/') {
      $fileInPublic = "/" . $fileInPublic;
    }
    return WEB_ROOT . $fileInPublic;
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
