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
    <form action="../server/teacher/add_student.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-25">
          <label for="student_name">Student name</label>
        </div>
        <div class="col-25">
          <input type="text" id="student_name" name="student_name">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="code">Student ID</label>
        </div>
        <div class="col-25">
          <input type="text" id="code" name="student_id">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="class">Class</label>
        </div>
        <div class="col-25">
          <input type="text" id="class" name="class">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="birthday">Birthday</label>
        </div>
        <div class="col-75">
          <input type="date" name="birthday" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="pwd">Password</label>
        </div>
        <div class="col-25">
          <input type="password" id="pwd" name="password">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="student_avatar">Avatar</label>
        </div>
        <div class="col-75">
          <input type="file" name="student_avatar" required>
        </div>
      </div>
      <div class="row">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>
</body>
</html>
