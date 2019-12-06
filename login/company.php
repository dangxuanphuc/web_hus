<form action="../server/login/company.php" method="post">
  <div class="w3-section">
    <p>
      <label for="companyID" class="control-label">Organization ID</label>
      <input type="text" id="companyID" class="form-control w3-input input_name"
        name="txtUsername" required>
    </p>
    <p>
      <label for="companyPSW" class="control-label">Password</label>
      <input type="text" id="companyPSW" class="form-control w3-input"
        name="txtPassword" required>
    </p>
  </div>
  <input class="w3-btn w3-ripple w3-green" type="submit" value="Login">
</form>
