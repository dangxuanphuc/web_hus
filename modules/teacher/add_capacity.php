<div class="w3-container">
  <div class="w3-row w3-center">
    <h3>THÊM NĂNG LỰC</h3>
  </div>
  <form action="../server/teacher/add_capacity.php" method="post" enctype="multipart/form-data" class="w3-container w3-light-grey">
    <div class="w3-row w3-section">
      <label for="capacity_name">Tên năng lực</label>
      <input type="text" id="capacity_name" class="w3-input w3-border w3-round-large" name="capacity_name" placeholder="Ruby" required>
    </div>
    <div class="w3-row w3-section">
      <label for="capacity_type">Loại năng lực</label>
      <input type="text" id="capacity_type" class="w3-input w3-border w3-round-large" name="capacity_type" placeholder="Ngôn ngữ lập trình" required>
    </div>
    <div class="w3-row w3-section">
      <label for="capacity_note">Giới hạn mức đánh giá</label>
      <input type="text" id="capacity_note" class="w3-input w3-border w3-round-large" name="capacity_note" placeholder="10" required>
    </div>
    <input type="submit" class="w3-button w3-white w3-border w3-border-green w3-round-large" value="Thêm">
  </form>
</div>
