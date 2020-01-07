<div class="w3-bar w3-light-grey" style="padding: 5px 0">
  <a href="student.php?status=list_request_organization" class="w3-bar-item brand">Trang chủ</a>
  <div class="w3-right">
    <span class="w3-left" style="margin-top:10px;">Xin chào</span>
    <div class="w3-dropdown-hover">
      <button><?php echo $_SESSION["student_name"]?></button>
      <div class="w3-dropdown-content w3-bar-block w3-border" style="right:0">
        <a href="student.php?status=student_profile" class="w3-bar-item w3-button">Hồ sơ</a>
        <a href="../login/logout.php" class="w3-bar-item w3-button">Đăng xuất</a>
      </div>
    </div>
  </div>
</div>
