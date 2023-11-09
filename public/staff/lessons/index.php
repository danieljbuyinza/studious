<?php require_once "../../../private/initialize.php"; ?>

<?php
  $lessons = [
    ['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'About Globe Bank'],
    ['id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'History'],
    ['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Leadership'],
    ['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Commercial'],
  ];
?>

<?php $pageTitle = "Lessons"; ?>
<?php include SHARED_PATH . "/staff-header.php"; ?>

<div id="content">
  <div class="lessons listing">
    <h1>Lessons</h1>

    <div class="actions">
      <a href="" class="action">Create New Lesson</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Position</th>
        <th>Visible</th>
  	    <th>Name</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php foreach($lessons as $lesson) { ?>
        <tr>
          <td><?php echo htmlChars($lesson['id']); ?></td>
          <td><?php echo htmlChars($lesson['position']); ?></td>
          <td><?php echo $lesson['visible'] == 1 ? 'true' : 'false'; ?></td>
    	    <td><?php echo htmlChars($lesson['menu_name']); ?></td>
          <td><a href="<?php echo htmlChars(urlFor('/staff/lessons/show.php?id=' . $lesson['id'])); ?>" class="action">View</a></td>
          <td><a href="">Edit</a></td>
          <td><a href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>
</div>

<?php include SHARED_PATH . "/staff-footer.php"; ?>
