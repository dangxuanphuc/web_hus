<!DOCTYPE html>
<html lang="en">
<head>
  <title>Company Title</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    *{
      padding: 0;
      margin: 0;
    }
    .content {
      margin-top: 50px;
      margin-left: 250px;
      width: 900px;
      height: 600px;
      background: gray;
    }
    .company {
      margin-left: 30px;
      margin-bottom: 30px;
      width: 250px;
      height: 230px;
      background: red;
      float: left;
    }
  </style>
</head>
<body>
  <div class="wrap w3-light-grey">
    <div class="w3-row w3-green header">
      <?php include("../modules/company/header.php");?>
    </div>

    <div class="w3-row content w3-light-grey">
      <?php include("../modules/company/content.php");?>
    </div>
  </div>
</body>
</html>
