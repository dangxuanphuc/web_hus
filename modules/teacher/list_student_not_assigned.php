<?php
  include("../server/config.php");
  $request_id = $_GET["id"];
  $sql = "SELECT * FROM intern_students
    WHERE id NOT IN (SELECT student_id FROM intern_organization_request_assignment WHERE status=0 or status=1)";
  $sql_list_student = mysqli_query($conn, $sql);
?>
<h1>List Registration</h1>
<table class="w3-table">
  <tr>
    <th>Student name</th>
    <th>Information</th>
  </tr>
  <?php while($row1 = mysqli_fetch_assoc($sql_list_student)) { ?>
    <tr>
      <td><?php echo $row1["name"] ?></td>
      <td><a href="../server/teacher/add_student_not_assigned.php?request_id=<?php echo $request_id?>&id=<?php echo $row1['id']?>">Select</a></td>
    </tr>
  <?php } ?>
</table>
