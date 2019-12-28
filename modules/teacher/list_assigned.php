<?php
  include("../server/config.php");
  $request_id = $_GET["id"];
  $sql = "SELECT * FROM intern_organization_request_assignment ab
    JOIN intern_students sp ON ab.student_id = sp.id
    WHERE organization_request_id = $request_id";
  $sql_request_assigned = mysqli_query($conn, $sql);
?>

<h1>List assigned</h1>
<table class="w3-table">
  <tr>
    <th>Student Name</th>
    <th>Information</th>
    <th></th>
  </tr>
  <?php while($row1 = mysqli_fetch_assoc($sql_request_assigned)) { ?>
    <tr>
      <td> <?php echo $row1["name"] ?></td>
      <td><a href="layout_teacher.php?status=student_profile&student_id=<?php echo $row1['id'] ?>">Show more</a></td>
      <td><a href="../server/teacher/delete_student_assigned.php?student_id=<?php echo $row1['id'] ?>&request_id=<?php echo $request_id?>">Delete</a></td>
    </tr>
  <?php } ?>
</table>
<h1>Add Student</h1>
<button><a href="layout_teacher.php?status=list_student_register&id=<?php echo $request_id?>">List Registration</a></button>
<button><a href="layout_teacher.php?status=list_student_not_assigned&id=<?php echo $request_id?>">List not assigned</a></button>
