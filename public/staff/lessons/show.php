<?php require_once "../../../private/initialize.php"; ?>

<?php $pageTitle = "Lessons"; ?>
<?php include SHARED_PATH . "/staff-header.php"; ?>

<div id="content">
  <a href="<?php echo urlFor('/staff/lessons/index.php'); ?>">< Back to list</a>
  <br>
  <?php
    $id = $_GET['id'] ?? "1";
    echo "Lesson: " . htmlChars(htmlChars($id));
  ?>
</div>

<?php include SHARED_PATH . "/staff-footer.php"; ?>
