<?php require_once "../../../private/initialize.php"; ?>

<?php
  $courses = [
    ['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'About Globe Bank'],
    ['id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'Consumer'],
    ['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Small Business'],
    ['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Commercial'],
  ];
?>

<?php $pageTitle = "Courses"; ?>
<?php include SHARED_PATH . "/staff-header.php"; ?>

<div id="content">
  <div class="courses listing">
    <h1>Courses</h1>

    <div class="actions">
      <a href="<?php echo urlFor("/staff/courses/new.php"); ?>" class="action">Create New Course</a>
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

      <?php foreach($courses as $course) { ?>
        <tr>
          <td><?php echo htmlChars($course['id']); ?></td>
          <td><?php echo htmlChars($course['position']); ?></td>
          <td><?php echo $course['visible'] == 1 ? 'true' : 'false'; ?></td>
    	    <td><?php echo htmlChars($course['menu_name']); ?></td>
          <td><a href="<?php echo htmlChars(urlFor('/staff/courses/show.php?id=' . $course['id'])); ?>" class="action">View</a></td>
          <td><a href="<?php echo htmlChars(urlFor('/staff/courses/edit.php?id=' . $course['id'])); ?>">Edit</a></td>
          <td><a href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>
</div>

<?php include SHARED_PATH . "/staff-footer.php"; ?>
