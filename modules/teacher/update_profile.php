<?php
  include "../server/config.php";
  include "../server/function.php";
  $teacher_id = $_SESSION["teacher_id"];
?>
<div class="w3-container">
  <div class="w3-row w3-center">
    <h3>CẬP NHẬT THÔNG TIN CÁ NHÂN</h3>
  </div>
  <form action="../server/teacher/update_profile.php" method="POST" enctype="multipart/form-data" class="w3-container w3-light-grey">
    <div class="w3-row w3-section">
      <label for="teacher_name">Tên giảng viên</label>
      <input type="text" id="teacher_name" class="w3-input w3-border w3-round-large" name="teacher_name" value="<?php name_teacher($teacher_id)?>">
    </div>
    <div class="w3-row w3-section">
      <label for="sex">Giới tính</label>
      <input type="text" id="class" class="w3-input w3-border w3-round-large" name="sex" value="<?php gender_teacher($teacher_id);?>">
    </div>
    <div class="w3-row w3-section">
      <label for="birthday">Ngày sinh</label>
      <input type="date" class="w3-input w3-border w3-round-large" name="birthday" value="<?php birthday_teacher($teacher_id);?>">
    </div>
    <div class="w3-row w3-section">
      <label for="avatar">Avatar</label>
      <input type="file" class="w3-input w3-border w3-round-large" name="avatar">
    </div>
    <input type="submit" class="w3-button w3-white w3-border w3-border-green w3-round-large" value="Lưu">
    <button class="w3-button w3-white w3-border w3-border-gray w3-round-large"><a href="teacher.php?status=teacher_profile">Quay lại</a></button>
  </form>
</div>
