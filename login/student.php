<form action="../server/login/student.php" method="post">
  <div class="w3-section">
    <p>
      <label for="studentID" class="control-label">Student ID</label>
      <input type="text" id="studentID" class="form-control w3-input input_name"
        name="txtUsername" required>
    </p>
    <p>
      <label for="studentPSW" class="control-label">Password</label>
      <input type="text" id="studentPSW" class="form-control w3-input"
        name="txtPassword" required>
    </p>
  </div>
  <input class="w3-btn w3-ripple w3-green" name="loginBtn" type="submit" value="Login">
</form>
