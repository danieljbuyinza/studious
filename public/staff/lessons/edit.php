<?php require_once "../../../private/initialize.php";

  if (!isset($_GET['id'])) {
    redirectTo(urlFor("/staff/lessons/index.php"));
  }

  $id = $_GET['id'];
  $menu_name = "";
  $position = "";
  $visible = "";

  if (isPostRequest()) {
    $menu_name = $_POST['menu_name'] ?? '';
    $position = $_POST['position'] ?? '';
    $visible = $_POST['visible'] ?? '';

    echo "Form parameters<br />";
    echo "Menu name: " . $menu_name . "<br>";
    echo "Position: " . $position . "<br>";
    echo "Visible: " . $visible . "<br>";
  }
?>

<?php $page_title = "Edit Lesson"; ?>
<?php include SHARED_PATH . "/staff-header.php"; ?>

<div id="content">

  <a class="back-link" href="<?php echo urlFor('/staff/lessons/index.php'); ?>">&laquo; Back to List</a>

  <div class="lesson">
    <h1>Edit Lesson</h1>

    <form action="<?php echo urlFor('/staff/lessons/edit.php?id=' . htmlChars(encode($id))); ?>" method="post">
      <dl>
        <dt>Menu Name</dt>
        <dd><input type="text" name="menu_name" value="<?php echo htmlChars($menu_name); ?>" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1" <?php if ($position == "1") { echo "selected"; } ?>>1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1" <?php if ($visible == "1") { echo "checked"; } ?> />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Lesson" />
      </div>
    </form>

  </div>

</div>

<?php include SHARED_PATH . "/staff-footer.php"; ?>
