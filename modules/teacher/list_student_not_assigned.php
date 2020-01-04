<?php
  include("../server/config.php");
  $request_id = $_GET["id"];
  $sql = "SELECT * FROM intern_students
    WHERE id NOT IN (SELECT student_id FROM intern_organization_request_assignment)";
  $sql_list_student = mysqli_query($conn, $sql);
?>
<div class="w3-col w3-border w3-round">
  <h3 class="w3-center">DANH SÁCH CHƯA PHÂN CÔNG</h3>
  <table class="w3-table w3-bordered w3-centered">
    <tr>
      <th>Tên Sinh Viên</th>
      <th>Lựa Chọn</th>
    </tr>
    <?php while($temp = mysqli_fetch_assoc($sql_list_student)) { ?>
      <tr>
        <td><?php echo $temp["name"] ?></td>
        <td><a href="../server/teacher/add_student_not_assigned.php?request_id=<?php echo $request_id?>&id=<?php echo $temp['id']?>" class="w3-button w3-white w3-border w3-border-grey w3-round-large">Thêm</a></td>
      </tr>
    <?php } ?>
  </table>
</div>
<button class="w3-button w3-white w3-border w3-border-gray w3-round-large w3-margin"><a href="teacher.php?status=list_assigned&id=<?php echo $request_id?>">Quay lại</a></button>
