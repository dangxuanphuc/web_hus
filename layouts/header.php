<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right"
      href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="/web_hus/index.php" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small">CONTACT</a>
    <?php
      echo "<a href='/web_hus/login/' class='w3-bar-item w3-button w3-hide-small w3-right'>LOGIN</a>";
    ?>
  </div>

  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button" onclick="toggleFunction()">LOGIN</a>
    <a href="#" class="w3-bar-item w3-button" onclick="toggleFunction()">SIGNUP</a>
  </div>
</div>
