<?php session_start();?>
<style>
  a {
    text-decoration: none;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
  }
  h3 {
    font-size: 20px;
  }
  h3:hover {
    transform: scale(1.2);
    color: lightcoral;
  }
</style>
<div class="w3-green w3-container w3-twothird">
  <h2></h2>
</div>
<div class="w3-container w3-third">
  <div class="w3-row">
    <div class="w3-third w3-container w3-green">
      <h2> <a href="organization.php?status=intern_organization_profile"><?php echo $_SESSION["organization_name"]?><a></h2>
    </div>
    <div class="w3-third w3-container">
      <h2> <a href="organization.php?status=new_request">Create</a></h2>
    </div>
    <div class="w3-third w3-container">
      <h2><a href="../login/logout.php">Sign Out</a></h2>
    </div>
  </div>
</div>
