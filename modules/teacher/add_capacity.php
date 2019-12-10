<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    * {
      box-sizing: border-box;
    }
    input[type=text], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }
    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
    }
    input[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
    }
    input[type=submit]:hover {
      background-color: #45a049;
    }
    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
    .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
    }
    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    @media screen and (max-width: 600px) {
      .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <form action="../server/teacher/add_capacity.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-25">
          <label for="capacity_name">Capacity name</label>
        </div>
        <div class="col-25">
          <input type="text" id="capacity_name" name="capacity_name">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="capacity_type">Capacity type</label>
        </div>
        <div class="col-25">
          <input type="text" id="capacity_type" name="capacity_type">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="capacity_note">Note</label>
        </div>
        <div class="col-25">
          <input type="text" id="capacity_note" name="capacity_note">
        </div>
      </div>
      <div class="row">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>
</body>
</html>
