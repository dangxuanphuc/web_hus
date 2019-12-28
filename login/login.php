<div class="w3-cell-row w3-margin-top" style="height: 100%">
  <div class="w3-container w3-center w3-cell w3-cell-middle">
    <h1 class="w3-xxxlarge">Log In</h1>
    <div id="error" class="w3-margin w3-padding-small"></div>
    <div class="w3-container" style="margin: auto; width: 600px">
      <div class="w3-row">
        <a href="javascript:void(0)" onclick="openTab(event, 'student');">
          <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding w3-border-green">Student</div>
        </a>
        <a href="javascript:void(0)" onclick="openTab(event, 'teacher');">
          <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Teacher</div>
        </a>
        <a href="javascript:void(0)" onclick="openTab(event, 'organization');">
          <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Organization</div>
        </a>
      </div>

      <div id="student" class="w3-container w3-padding-24 w3-left-align tab" style="display:block">
        <?php include "student.php" ?>
      </div>

      <div id="teacher" class="w3-container w3-padding-24 w3-left-align tab" style="display:none">
        <?php include "teacher.php" ?>
      </div>

      <div id="organization" class="w3-container w3-padding-24 w3-left-align tab" style="display:none">
        <?php include "organization.php" ?>
      </div>
    </div>
  </div>
</div>
