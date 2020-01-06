<form action="../server/login/organization.php" method="post">
  <div class="w3-section">
    <p>
      <label for="organizationID" class="control-label">Mã số thuế</label>
      <input type="text" id="organizationID" class="form-control w3-input input_name"
        name="txtUsername" required>
    </p>
    <p>
      <label for="organizationPSW" class="control-label">Mật khẩu</label>
      <input type="password" id="organizationPSW" class="form-control w3-input"
        name="txtPassword" required>
    </p>
  </div>
  <input class="w3-btn w3-ripple w3-green" type="submit" value="Login">
</form>
