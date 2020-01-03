<div class="w3-container">
  <div class="w3-row w3-center">
    <h3>THÊM GIẢNG VIÊN</h3>
  </div>
  <form action="../server/teacher/add_teacher.php" method="post" enctype="multipart/form-data" class="w3-container w3-light-grey">
    <div class="w3-row w3-section">
      <label for="teacher_name">Tên giảng viên</label>
      <input type="text" id="teacher_name" class="w3-input w3-border w3-round-large" name="teacher_name" placeholder="Nguyễn Văn A">
    </div>
    <div class="w3-row w3-section">
      <label for="teacher_id">Mã giảng viên</label>
      <input type="text" id="teacher_id" class="w3-input w3-border w3-round-large" name="teacher_id" placeholder="t001">
    </div>
    <div class="w3-row w3-section">
      <label for="gender">Giới tính</label>
      <select class="w3-select" name="gender">
        <option value="" disabled selected>- Chọn giới tính -</option>
        <option value="Nam">Nam</option>
        <option value="Nữ">Nữ</option>
        <option value="Giới tính thứ 3">Giới tính thứ 3</option>
      </select>
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
      <label for="teacher_avatar">Avatar</label>
      <input type="file" class="w3-input w3-border w3-round-large" name="teacher_avatar" required>
    </div>
    <input type="submit" class="w3-button w3-white w3-border w3-border-green w3-round-large" value="Lưu">
  </form>
</div>
