<?php
  include "../server/config.php";
  $request_id = $_GET["request_id"];
  $sql = "SELECT * FROM intern_student_register ab
    JOIN intern_students sp ON ab.student_id = sp.id
    WHERE request_id = $request_id";
  $sql_student_register = mysqli_query($conn, $sql);
  $date = date('Y-m-d');
  $timestamp = strtotime($date);
  $start_date = date("Y-m-d", $timestamp);
  $end_date = date("Y-m-d", strtotime("+4 months", $timestamp));
?>
<div class="w3-col w3-round">
  <h3 class="w3-center">DANH SÁCH ĐĂNG KÝ</h3>
  <table class="w3-table w3-bordered w3-centered">
    <tr>
      <th>Tên Sinh Viên</th>
      <th>Ngày bắt đầu</th>
      <th>Ngày kết thúc</th>
      <th>Lựa Chọn</th>
    </tr>
    <?php while($temp = mysqli_fetch_assoc($sql_student_register)) { ?>
      <tr>
        <td><?php echo $temp["name"] ?></td>
        <td><input type="date" name="start_date" value="<?php echo $start_date ?>"></td>
        <td><input type="date" name="end_date" value="<?php echo $end_date ?>"></td>
        <td><a href="../server/teacher/add_student_register.php?request_id=<?php echo $request_id?>&student_id=<?php echo $temp['student_id']?>&start_date=<?php echo $start_date?>&end_date=<?php echo $end_date?>" class="w3-button w3-white w3-border w3-border-green w3-round-large">Thêm</a></td>
      </tr>
    <?php } ?>
  </table>
</div>
<button class="w3-button w3-white w3-border w3-border-gray w3-round-large w3-margin"><a href="teacher.php?status=list_assigned&request_id=<?php echo $request_id?>">Quay lại</a></button>
