<form action="../server/login/student.php" method="post">
  <div class="w3-section">
    <p>
      <label for="studentID" class="control-label">Mã sinh viên</label>
      <input type="text" id="studentID" class="form-control w3-input input_name"
        name="txtUsername" required>
    </p>
    <p>
      <label for="studentPSW" class="control-label">Mật khẩu</label>
      <input type="password" id="studentPSW" class="form-control w3-input"
        name="txtPassword" required>
    </p>
  </div>
  <input class="w3-btn w3-ripple w3-green" name="loginBtn" type="submit" value="Login">
</form>
