<?php
  function urlFor($scriptPath) {
    // add the leading '/' if not present
    if($scriptPath[0] != '/') {
      $scriptPath = "/" . $scriptPath;
    }
    return WEB_ROOT . $scriptPath;
  }
