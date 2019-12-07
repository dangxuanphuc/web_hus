<?php
  include_once("../server/config.php");

  $sql = "SELECT * FROM enterprise_recruitment_request_form";
  $resultEnterPriseRequest = mysqli_query($conn, $sql);
  $followingdataEnterPriseRequest = $resultEnterPriseRequest->fetch_array(MYSQLI_ASSOC);

  $value = $_SESSION["username"];
  $sqlGetStartAndEndDate = "SELECT start_date, end_date, status
    FROM assigned_table, student_registration
    WHERE student_registration.student_id = (
      SELECT id from student_profile WHERE student_profile.student_code = '$value')";
  $result = mysqli_query($conn, $sqlGetStartAndEndDate);
  $followingdataDate = $result->fetch_array(MYSQLI_ASSOC);
?>
<html>
  <head>
    <title>Welcome </title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>

  <body>
    <div class="container">
      <form action="../server/student/assigned_table.php?request_id=<?php echo $followingdataEnterPriseRequest['id']?>" method="POST" >
        <div class="w3-panel w3-card" style="width: 400px; display: block; height: 30%; margin-left: 300px">
          <p>Subject: <?php echo $followingdataEnterPriseRequest["request_name"] ?></p>
          <p>Description: <?php echo $followingdataEnterPriseRequest["short_description"] ?></p>
          <label for="uname"><b>Start date: </b></label>
          <input type="date" name="start_date" value="<?php echo $followingdataDate["start_date"] ?>" required>
          <br>
          <b><span>End date: </span></b>
          <input type="date" name="end_date" value="<?php echo $followingdataDate["end_date"] ?>" required></br>
          <span></b>Status:</b></span>
          <select name="status">
            <?php
              if($followingdataDate["status"] == "0"){?>
                <option value="<?php echo '0'?>"> Chờ thực hiện </option>
                <option value="<?php echo '1'?>"> Đang thực hiện </option>";
              <?php } else {?>
                <option value="<?php echo '1'?>"> Đang thực hiện </option>
                <option value="<?php echo '2'?>"> Đã thực hiện xong </option>";
              <?php }
            ?>
          </select>
          <button type="submit">Save</button>
          </form>
        </div>
    </div>
  </body>
</html>
