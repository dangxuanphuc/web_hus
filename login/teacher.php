<form action="../server/login/teacher.php" method="post">
  <div class="w3-section">
    <p>
      <label for="teacherID" class="control-label">Mã giảng viên</label>
      <input type="text" id="teacherID" class="form-control w3-input input_name"
        name="txtUsername" required>
    </p>
    <p>
      <label for="teacherPSW" class="control-label">Mật khẩu</label>
      <input type="password" id="teacherPSW" class="form-control w3-input"
        name="txtPassword" required>
    </p>
  </div>
  <input class="w3-btn w3-ripple w3-green" type="submit" value="Login">
</form>
