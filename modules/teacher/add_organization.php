<div class="w3-container">
  <div class="w3-row w3-center">
    <h3>THÊM DOANH NGHIỆP</h3>
  </div>
  <form action="../server/teacher/add_organization.php" method="post" enctype="multipart/form-data" class="w3-container w3-light-grey">
    <div class="w3-row w3-section">
      <label for="organization_name">Tên doanh nghiệp</label>
      <input type="text" id="organization_name" class="w3-input w3-border w3-round-large" name="organization_name" placeholder="Công ty TNHH HUS" required>
    </div>
    <div class="w3-row w3-section">
      <label for="organization_id">Mã thuế</label>
      <input type="text" id="organization_id" class="w3-input w3-border w3-round-large" name="organization_id" placeholder="10000" required>
    </div>
    <div class="w3-row w3-section">
        <label for="empl">Số nhân viên</label>
        <input type="text" id="empl" class="w3-input w3-border w3-round-large" name="employee" placeholder="575" required>
    </div>
    <div class="w3-row w3-section">
      <label for="revenue">Doanh thu</label>
      <input type="text" id="revenue" class="w3-input w3-border w3-round-large" name="revenue"  placeholder="1000$" required>
    </div>
    <div class="w3-row w3-section">
      <label for="address">Địa chỉ</label>
      <input type="text" id="address" class="w3-input w3-border w3-round-large" name="address"  placeholder="Cầu Giấy, Hà Nội" required>
    </div>
    <div class="w3-row w3-section">
      <label for="url">Trang web</label>
      <input type="text" id="url" class="w3-input w3-border w3-round-large" name="url" placeholder="https://hus.com.vn" required>
    </div>
    <div class="w3-row w3-section">
      <label for="description">Mô tả</label>
      <input type="text" id="description" class="w3-input w3-border w3-round-large" name="description" placeholder="Lorem ipsum dolor sit amet" required>
    </div>
    <div class="w3-row w3-section">
      <label for="pwd">Password</label>
      <input type="password" id="pwd" name="password" class="w3-input w3-border w3-round-large" required>
    </div>
    <div class="w3-row w3-section">
      <label for="organization_avatar">Avatar</label>
      <input type="file" name="organization_avatar" class="w3-input w3-border w3-round-large" required>
    </div>
    <input type="submit" class="w3-button w3-white w3-border w3-border-green w3-round-large" value="Lưu">
  </form>
</div>
