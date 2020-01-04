<?php
include("../server/config.php");
$request_id = $_GET["id"];
$sql = "SELECT * from intern_student_register ab
  join intern_students sp on ab.student_id = sp.id
  where request_id = $request_id";
$sql_student_register = mysqli_query($conn, $sql);
?>
<div class="w3-col w3-border w3-round">
  <h3 class="w3-center">DANH SÁCH ĐĂNG KÝ</h3>
  <table class="w3-table w3-bordered w3-centered">
    <tr>
      <th>Tên Sinh Viên</th>
      <th>Thông Tin Cá Nhân</th>
      <th>Lựa Chọn</th>
    </tr>
    <?php while($temp = mysqli_fetch_assoc($sql_student_register)) { ?>
      <tr>
        <td><?php echo $temp["name"] ?></td>
        <td><a href="teacher.php?status=student_profile&student_id=<?php echo $temp['id']?>" class="w3-button w3-white w3-border w3-border-grey w3-round-large">Xem chi tiết</a></td>
        <td> <a href="../server/teacher/add_student_request.php?request_id=<?php echo $request_id?>&student_id=<?php echo $temp['student_id']?>" class="w3-button w3-white w3-border w3-border-green w3-round-large">Thêm</a></td>
      </tr>
    <?php } ?>
  </table>
</div>
<button class="w3-button w3-white w3-border w3-border-gray w3-round-large"><a href="teacher.php?status=list_assigned&id=<?php echo $request_id?>">Quay lại</a></button>
