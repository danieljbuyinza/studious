<?php require_once "../../private/initialize.php"; ?>

<?php $pageTitle = "Staff Menu"; ?>
<?php include SHARED_PATH . "/staff-header.php"; ?>

<div id="content">
  <div id="main-menu">
    <h2>Main Menu</h2>
    <ul>
      <li><a href="<?php echo urlFor('/staff/courses/index.php'); ?>">Courses</a></li>
      <li><a href="<?php echo urlFor('/staff/lessons/index.php'); ?>">Lessons</a></li>
    </ul>
  </div>
</div>

<?php include SHARED_PATH . "/staff-footer.php"; ?>
