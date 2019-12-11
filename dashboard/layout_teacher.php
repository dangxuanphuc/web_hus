<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teacher Title</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    .left, .right {
      height: 700px;
    }
    .content1 {
      margin-top: 50px;
      margin-left: 250px;
      width: 900px;
      height: 600px;
    }
    .company {
      margin-left: 30px;
      margin-bottom: 30px;
      width: 270px;
      height: 250px;
      float: left;
    }
  </style>
</head>
<body>
  <div class="wrap w3-light-grey">
    <div class="w3-row w3-green header">
      <?php include("../modules/teacher/header.php");?>
    </div>

    <div class="w3-row content w3-light-grey">
      <?php include("../modules/teacher/content.php");?>
    </div>
  </div>
</body>
</html>
