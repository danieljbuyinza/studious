<?php if (!isset($pageTitle)) {
  $pageTitle = "Staff Area";
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Studious - <?php echo htmlChars($pageTitle); ?></title>
  <link rel="stylesheet" href="<?php echo urlFor('/styles/staff.css'); ?>">
</head>
<body>
  <header>
    <h1>Studious - Staff Area</h1>
  </header>

  <nav>
    <ul>
      <li><a href="<?php echo urlFor('/staff/index.php'); ?>">Menu</a></li>
    </ul>
  </nav>
