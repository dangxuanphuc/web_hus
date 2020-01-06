<?php
include "../server/config.php";
$sql_teacher = mysqli_query($conn, "SELECT * from intern_teachers");
?>
<div class="w3-col w3-border w3-round">
  <h3 class="w3-center">DANH SÁCH GIẢNG VIÊN</h3>
  <table class="w3-table-all w3-bordered w3-centered">
    <tr>
      <th>Tên Giảng Viên</th>
      <th>Thông Tin Cá Nhân</th>
    </tr>
    <?php while($temp = mysqli_fetch_assoc($sql_teacher)) { ?>
      <tr>
        <td><?php echo $temp["name"] ?></td>
        <td><a href="teacher.php?status=teacher_profile&teacher_id=<?php echo $temp['id']?>" class="w3-button w3-white w3-border w3-border-grey w3-round-large">Xem chi tiết</a></td>
      </tr>
    <?php } ?>
  </table>
</div>
