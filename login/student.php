<form action="../server/login/student.php" method="post">
  <div class="w3-section">
    <p>
      <label for="studentID" class="control-label">Student ID</label>
      <input type="text" id="studentID" class="form-control w3-input input_name"
        name="txtUsername" maxlength="20" required>
    </p>
  </div>
  <input class="w3-btn w3-ripple w3-green" name="loginBtn" type="submit" value="Login">
</form>
