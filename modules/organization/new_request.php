<div class="w3-container">
  <div class="w3-row w3-center">
    <h3>TẠO PHIẾU TUYỂN DỤNG</h3>
  </div>
  <form action="../server/organization/new_request.php" method="POST" class="w3-container w3-light-grey">
    <div class="w3-row w3-section">
      <label for="request_name">Vị trí tuyển dụng</label>
      <input type="text" id="request_name" class="w3-input w3-border w3-round-large" name="request_name" placeholder="Ruby Developer">
    </div>
    <div class="w3-row w3-section">
      <label for="amount">Số lượng</label>
      <input type="text" id="amount" class="w3-input w3-border w3-round-large" name="amount" placeholder="15">
    </div>
    <div class="w3-row w3-section">
      <label for="description">Mô tả</label>
      <textarea id="description" class="w3-input w3-border w3-round-large" name="description" placeholder="Lorem ipsum dolor sit amet" style="height:200px"></textarea>
    </div>
    <input type="submit" class="w3-button w3-white w3-border w3-border-green w3-round-large" value="Lưu">
  </form>
</div>
