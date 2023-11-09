<?php require_once "../../../private/initialize.php"; ?>

<?php
  $id = $_GET['id'] ?? "1";
  echo htmlChars($id);
?>

<a href="show.php?name=<?php echo encode('John Doe'); ?>">Link</a><br>
<a href="show.php?company=<?php echo encode('Widgets&More'); ?>">Link</a><br>
<a href="show.php?query=<?php echo encode('!#*?'); ?>">Link</a><br>
