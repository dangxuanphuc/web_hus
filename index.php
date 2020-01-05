<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sàn giao dịch thực tập sinh</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,500i,700,700i,900,900i&display=swap&subset=vietnamese" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <style>
    html, body, h1, h2, h3, h4 {
      font-family: "Roboto", sans-serif;
    }
    .mySlides {
      display: none;
    }
    .w3-tag, .fa {
      cursor: pointer;
    }
    .w3-tag {
      height: 15px;
      width: 15px;
      padding: 0;
      margin-top: 6px;
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
      background: url("assets/images/move-up.png") no-repeat 0px 0px;
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
    .organization-block {
      margin: 0 0 18px 18px;
      float: left;
    }
    .organization-block img {
      border: inset 15px transparent;
      padding: 10px;
      width: 160px;
      height: 160px;
      box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.35);
      box-sizing: border-box;
      transition: box-shadow 0.3s;
      background-color: white;
    }
  </style>
</head>
<body>
  <?php include "layouts/application.php" ?>
  <script src="assets/js/application.js"></script>
</body>
</html>
