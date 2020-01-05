<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teacher Title</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,500i,700,700i,900,900i&display=swap&subset=vietnamese" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <style>
    html, body, h1, h2, h3, h4, h5, h6 {
      font-family: "Roboto", sans-serif;
    }
    a {
      text-decoration: none;
    }
    button {
      background-color: transparent;
      border: none;
      cursor: pointer;
      padding: 10px;
    }
    .content {
      width: 400px;
      margin: 20px 20px;
    }
    .header-teacher {
      background-color: #f8f9fa!important;
    }
    .brand {
      font-size: 18px;
    }
    #toTop {
      display: none;
      text-decoration: none;
      position: fixed;
      bottom: 3%;
      right: 3%;
      overflow: hidden;
      width: 32px;
      height: 32px;
      border: none;
      text-indent: 100%;
      background: url("../assets/images/move-up.png") no-repeat 0px 0px;
    }
    #toTopHover {
      width: 32px;
      height: 32px;
      display: block;
      overflow: hidden;
      float: right;
      opacity: 0;
      -moz-opacity: 0;
      filter: alpha(opacity=0);
    }
  </style>
</head>
<body>
  <?php include "../modules/teacher/header.php";?>
  <?php include "../modules/teacher/content.php";?>
  <script type="text/javascript" src="../assets/js/move-top.js"></script>
  <script type="text/javascript" src="../assets/js/easing.js"></script>
  <script type="text/javascript" src="../assets/js/scroll.js"></script>
  <script type="text/javascript" src="../assets/js/scroll-effect.js"></script>
</body>
</html>
