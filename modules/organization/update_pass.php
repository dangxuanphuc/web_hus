<div class="w3-container">
  <div class="w3-row w3-center">
    <h3>CẬP NHẬT MẬT KHẨU</h3>
  </div>
  <form action="../server/organization/update_pass.php" method="post" enctype="multipart/form-data" class="w3-container w3-light-grey">
  <div class="w3-row w3-section">
      <label for="current">Mật khẩu hiện tại</label>
      <input type="password" class="w3-input w3-border w3-round-large" id="current" name="current_pass" required>
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
    <button class="w3-button w3-white w3-border w3-border-gray w3-round-large"><a href="organization.php?status=organization_profile">Quay lại</a></button>
  </form>
</div>
