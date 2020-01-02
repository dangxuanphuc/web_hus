<?php
  include("../server/config.php");
  $sql_student = mysqli_query($conn, "SELECT * from intern_students");
?>
<h1>List Student</h1>
<table class="w3-table">
  <tr>
    <th>Student name</th>
    <th>Information</th>
  <?php while($row1 = mysqli_fetch_assoc($sql_student)) { ?>
    <tr>
      <td><?php echo $row1["name"] ?></td>
      <td><a href="teacher.php?status=student_profile&student_id=<?php echo $row1['id'] ?>">Show info</a></td>
    </tr>
  <?php } ?>
</table>
