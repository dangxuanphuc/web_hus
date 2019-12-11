<?php
include("../server/config.php");
$sql_student = mysqli_query($conn, "SELECT * from teacher_profile");
?>
<h1>List Teacher</h1>
<table class="w3-table">
  <tr>
    <th>Teacher name</th>
    <th>Information</th>
  </tr>
  <?php while($row1 = mysqli_fetch_assoc($sql_student)) { ?>
    <tr>
      <td> <?php echo $row1["full_name"] ?></td>
      <td> <a href="../server/teacher/add_student_request.php?request_id=<?php echo $request_id?>&student_id=<?php echo $row1['student_id']?>">Show info</a></td>
    </tr>
  <?php } ?>
</table>
