<?php session_start();?>
<div class="w3-bar w3-light-grey" style="padding: 5px 0">
  <div class="w3-bar-item brand"><a href="organization.php?status=list_requests">Trang chủ</a></div>
  <div class="w3-bar-item w3-right">
    <span class="w3-left" style="margin-top:10px;">Công ty</span>
    <div class="w3-dropdown-hover">
      <button><?php echo $_SESSION["organization_name"]?></button>
      <div class="w3-dropdown-content w3-bar-block w3-border" style="right:0">
        <a href="organization.php?status=organization_profile" class="w3-bar-item w3-button">Hồ sơ</a>
        <a href="../login/logout.php" class="w3-bar-item w3-button">Đăng xuất</a>
      </div>
    </div>
  </div>
  <div class="w3-bar-item w3-right" style="margin-top:10px;"><a href="organization.php?status=new_request">Tạo phiếu tuyển dụng</a></div>
</div>
