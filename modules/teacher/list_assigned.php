<?php
  include("../server/config.php");
  $request_id = $_GET["id"];
  $sql = "SELECT * FROM intern_organization_request_assignment ab
    JOIN intern_students sp ON ab.student_id = sp.id
    WHERE organization_request_id = $request_id";
  $sql_request_assigned = mysqli_query($conn, $sql);
?>
<div class="w3-col w3-border w3-round">
  <h3 class="w3-center">DANH SÁCH PHÂN CÔNG</h3>
  <table class="w3-table w3-bordered w3-centered">
    <tr>
      <th>Tên Sinh Viên</th>
      <th>Thông Tin Cá Nhân</th>
      <th>Xóa</th>
    </tr>
    <?php while($temp = mysqli_fetch_assoc($sql_request_assigned)) { ?>
      <tr>
        <td><?php echo $temp["name"] ?></td>
        <td><a href="teacher.php?status=student_profile&student_id=<?php echo $temp['id']?>" class="w3-button w3-white w3-border w3-border-grey w3-round-large">Xem chi tiết</a></td>
        <td><a href="../server/teacher/delete_student_assigned.php?student_id=<?php echo $temp['id'] ?>&request_id=<?php echo $request_id?>" class="w3-button w3-white w3-border w3-border-red w3-round-large" onClick="return confirm('Bạn có chắc chắn không?')">Xóa</a></td>
      </tr>
    <?php } ?>
  </table>
  <div class="w3-center">
    <h3>THÊM SINH VIÊN</h3>
    <button><a href="teacher.php?status=list_student_register&id=<?php echo $request_id?>" class="w3-button w3-white w3-border w3-border-green w3-round-large">Danh sách đăng ký</a></button>
    <button><a href="teacher.php?status=list_student_not_assigned&id=<?php echo $request_id?>" class="w3-button w3-white w3-border w3-border-green w3-round-large">Danh sách chưa được phân công</a></button>
  </div>
</div>
