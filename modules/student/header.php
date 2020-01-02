<?php session_start();?>
<div class="w3-green w3-container w3-twothird">
  <h2></h2>
</div>
<div class="w3-container w3-third">
  <div class="w3-row">
    <div class="w3-half w3-container w3-green">
      <h2><a href="student.php?status=student_profile"> <?php echo $_SESSION["username"]?></a></h2>
    </div>
    <div class="w3-half w3-container">
    <h2><a href = "../login/logout.php">Đăng xuất</a></h2>
    </div>
  </div>
</div>
