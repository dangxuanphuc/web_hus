<div class="w3-container">
  <div class="w3-row w3-center">
    <h3>CẬP NHẬT THÔNG TIN CÔNG TY</h3>
  </div>
  <form action="../server/organization/update_organization_profile.php" method="POST" enctype="multipart/form-data" class="w3-container w3-light-grey">
    <div class="w3-row w3-section">
      <label for="organization_name">Tên Công Ty</label>
      <input type="text" id="organization_name" name="organization_name" class="w3-input w3-border w3-round-large" placeholder="Công ty TNHH ABC" required>
    </div>
    <div class="w3-row w3-section">
      <label for="employee">Số nhân viên</label>
      <input type="text" id="employee" name="employee" class="w3-input w3-border w3-round-large" placeholder="575" required>
    </div>
    <div class="w3-row w3-section">
      <label for="revenue">Doanh thu</label>
      <input type="text" id="revenue" name="revenue" class="w3-input w3-border w3-round-large" placeholder="5000$" required>
    </div>
    <div class="w3-row w3-section">
      <label for="address">Địa chỉ</label>
      <input type="text" id="address" name="address" class="w3-input w3-border w3-round-large" placeholder="Cầu giấy, Hà Nội" required>
    </div>
    <div class="w3-row w3-section">
      <label for="url">Trang web</label>
      <input type="text" id="url" name="url" class="w3-input w3-border w3-round-large" placeholder="https://hus.com.vn" required>
    </div>
    <div class="w3-row w3-section">
      <label for="organization_avatar">Avatar</label>
      <input type="file" name="organization_avatar" class="w3-input w3-border w3-round-large" required>
    </div>
    <input type="submit" class="w3-button w3-white w3-border w3-border-green w3-round-large" value="Lưu">
    <button><a href="organization.php?status=organization_profile" class="w3-button w3-white w3-border w3-border-grey w3-round-large">Quay lại</a></button>
  </form>
</div>
