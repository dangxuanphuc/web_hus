<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Title</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    .content {
      width: 600px;
      margin: 20px 20px;
    }
    a {
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="wrap">
    <div class="w3-row w3-green header">
      <?php include("../modules/student/header.php");?>
    </div>
    <div class="w3-row">
      <?php include("../modules/student/content.php");?>
    </div>
  </div>
</body>
</html>
