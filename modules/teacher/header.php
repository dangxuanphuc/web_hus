<div class="w3-top">
  <div class="w3-bar header-teacher" style="padding: 5px 0">
    <a href="teacher.php?status=list_request_organization" class="w3-bar-item brand">Trang chủ</a>
    <div class="w3-right">
      <span class="w3-left" style="margin-top:10px;">Xin chào</span>
      <div class="w3-dropdown-hover">
        <button><?php echo $_SESSION["teacher_name"]?></button>
        <div class="w3-dropdown-content w3-bar-block w3-border" style="right:0;">
          <a href="teacher.php?status=teacher_profile" class="w3-bar-item w3-button">Hồ sơ</a>
          <a href="../login/logout.php" class="w3-bar-item w3-button">Đăng xuất</a>
        </div>
      </div>
    </div>
  </div>
</div>
