<!DOCTYPE html>
<html lang="en">
<body>
  <div class="w3-container">
    <div class="w3-row w3-center">
      <h3>CẬP NHẬT THÔNG TIN CÁ NHÂN</h3>
    </div>
    <form action="../server/student/update_student_profile.php" method="POST" enctype="multipart/form-data" class="w3-container w3-light-grey">
      <div class="w3-row w3-section">
        <label for="student_name">Tên sinh viên</label>
        <input type="text" id="student_name" class="w3-input w3-border w3-round-large" name="student_name" placeholder="Nguyễn Văn A">
      </div>
      <div class="w3-row w3-section">
        <label for="class">Lớp</label>
        <input type="text" id="class" class="w3-input w3-border w3-round-large" name="class" placeholder="K61A2">
      </div>
      <div class="w3-row w3-section">
        <label for="birthday">Ngày sinh</label>
        <input type="date" class="w3-input w3-border w3-round-large" name="birthday" required>
      </div>
      <div class="w3-row w3-section">
        <label for="avatar">Avatar</label>
        <input type="file" class="w3-input w3-border w3-round-large" name="avatar" required>
      </div>
      <input type="submit" class="w3-button w3-white w3-border w3-border-green w3-round-large" value="Lưu">
      <button class="w3-button w3-white w3-border w3-border-gray w3-round-large"><a href="student.php?status=student_profile">Quay lại</a></button>
    </form>
  </div>
</body>
</html>
