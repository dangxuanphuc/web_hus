<div class="w3-container">
  <div class="w3-row w3-center">
    <h3>THÊM SINH VIÊN</h3>
  </div>
  <form action="../server/teacher/add_student.php" method="post" enctype="multipart/form-data" class="w3-container w3-light-grey">
    <div class="w3-row w3-section">
      <label for="student_name">Tên sinh viên</label>
      <input type="text" id="student_name" class="w3-input w3-border w3-round-large" name="student_name" placeholder="Nguyễn Văn A">
    </div>
    <div class="w3-row w3-section">
      <label for="student_id">Mã sinh viên</label>
      <input type="text" id="student_id" class="w3-input w3-border w3-round-large" name="student_id" placeholder="s001">
    </div>
    <div class="w3-row w3-section">
      <label for="class">Lớp</label>
      <input type="text" id="class" class="w3-input w3-border w3-round-large" name="class" placeholder="k61A3">
    </div>
    <div class="w3-row w3-section">
      <label for="birthday">Ngày sinh</label>
      <input type="date" name="birthday" class="w3-input w3-border w3-round-large">
    </div>
    <div class="w3-row w3-section">
      <label for="pwd">Mật khẩu</label>
      <input type="password" id="pwd" name="password" class="w3-input w3-border w3-round-large">
    </div>
    <div class="w3-row w3-section">
      <label for="student_avatar">Avatar</label>
      <input type="file" class="w3-input w3-border w3-round-large" name="student_avatar" required>
    </div>
    <input type="submit" class="w3-button w3-white w3-border w3-border-green w3-round-large" value="Lưu">
  </form>
</div>
