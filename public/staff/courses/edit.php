<?php require_once "../../../private/initialize.php";
  $test = $_GET['test'] ?? "";

  if ($test == "404") {
    error404();
  } elseif ($test == "500") {
    error500();
  } elseif ($test == "redirect") {
    redirectTo(urlFor("/staff/courses/index.php"));
  }
?>

<?php $page_title = "Edit Course"; ?>
<?php include SHARED_PATH . "/staff-header.php"; ?>

<div id="content">

  <a class="back-link" href="<?php echo urlFor('/staff/courses/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject edit">
    <h1>Edit Course</h1>

    <form action="" method="post">
      <dl>
        <dt>Menu Name</dt>
        <dd><input type="text" name="menu_name" value="" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1">1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1" />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Course" />
      </div>
    </form>

  </div>

</div>

<?php include SHARED_PATH . "/staff-footer.php"; ?>
