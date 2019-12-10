<?php
include("../server/config.php");
$request_id = $_GET["id"];
$sql = "SELECT * from student_registration ab
  join student_profile sp on ab.student_id = sp.id
  where request_id = $request_id";
$sql_student_registration = mysqli_query($conn, $sql);
?>
<h1>List Registration</h1>
<table class="w3-table">
  <tr>
    <th>Student name</th>
    <th>Information</th>
    <th></th>
  </tr>
  <?php while($row1 = mysqli_fetch_assoc($sql_student_registration)) { ?>
    <tr>
      <td> <?php echo $row1["name"] ?></td>
      <td><a href="layout_teacher.php?status=student_profile&student_id=<?php echo $row1['id'] ?>">Show more</a></td>
      <td> <a href="../server/teacher/add_student_request.php?request_id=<?php echo $request_id?>&student_id=<?php echo $row1['student_id']?>">Select</a></td>
    </tr>
  <?php } ?>
</table>
