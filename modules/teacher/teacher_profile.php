<?php
  include("../server/config.php");
  $teacher_id = $_SESSION["teacher_id"];
  $sql = mysqli_query($conn, "SELECT * from intern_teachers where id = $teacher_id");
  $row = mysqli_fetch_assoc($sql);
?>
<div class="w3-container">
  <div class="w3-third w3-center" style="margin-top:30px;">
    <img src="../public/uploads/<?php echo $row['avatar']?>" style="height:200px;width:200px" class="w3-circle">
    <p class="w3-large"><?php echo $row["name"];?></p>
  </div>
  <div class="w3-twothird" style="margin-top:20px;">
    <h3>THÔNG TIN CÁ NHÂN</h3>
    <p>Ngày sinh: <?php echo $row["date_of_birth"];?></p>
    <p>Giới tính: <?php echo $row["sex"];?></p>
    <p><button class="w3-button w3-white w3-border w3-border-red w3-round-large"><a href="teacher.php?status=update_teacher_profile">Cập nhật thông tin</a></button>
    <button class="w3-button w3-white w3-border w3-border-deep-orange w3-round-large"><a href="teacher.php?status=update_pass_teacher">Cập nhật mật khẩu</a></button>
    <button class="w3-button w3-white w3-border w3-border-gray w3-round-large"><a href="teacher.php?status=list_request">Quay lại</a></button></p>
  </div>
</div>
