<div class="w3-container">
  <div class="w3-row w3-center">
    <h3>CẬP NHẬT MẬT KHẨU</h3>
  </div>
  <form action="../server/student/update_pass.php" method="POST" enctype="multipart/form-data" class="w3-container w3-light-grey">
    <div class="w3-row w3-section">
      <label for="current">Mật khẩu hiện tại</label>
      <input type="password" class="w3-input w3-border w3-round-large" id="current" name="pass" required>
    </div>
    <div class="w3-row w3-section">
      <label for="new">Mật khẩu mới</label>
      <input type="password" class="w3-input w3-border w3-round-large" id="new" name="new_pass" required>
    </div>
    <div class="w3-row w3-section">
      <label for="re_type">Nhập lại mật khẩu mới</label>
      <input type="password" class="w3-input w3-border w3-round-large" id="re_type" name="password" required>
    </div>
    <input type="submit" class="w3-button w3-white w3-border w3-border-green w3-round-large" value="Lưu">
    <button class="w3-button w3-white w3-border w3-border-gray w3-round-large"><a href="student.php?status=student_profile">Quay lại</a></button>
  </form>
</div>
