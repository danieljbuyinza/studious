<?php require_once "../../../private/initialize.php";
  $test = $_GET['test'] ?? "";

  if ($test == "404") {
    error404();
  } elseif ($test == "500") {
    error500();
  } elseif ($test == "redirect") {
    redirectTo(urlFor("/staff/courses/index.php"));
  } else {
    echo "No error";
  }
