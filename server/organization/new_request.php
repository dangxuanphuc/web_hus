<?php
  include("../config.php");
  session_start();
  $request_name = $_POST["request_name"];
  $description = $_POST["description"];
  $amount = $_POST["amount"];
  $date_submit = date("y-m-d");
  $status = 3000;
  $organization_id = $_SESSION["organization_id"];
  $sql_intern_ability_dictionary = mysqli_query($conn, "SELECT * from intern_ability_dictionary ");

  $sql = "INSERT INTO intern_organization_requests(request_name, organization_id, description, amount, date_submitted, status) VALUES('$request_name', '$organization_id', '$description', '$amount', '$date_submit', '$status')";
  if (mysqli_query($conn, $sql)) {
    header("location:../../dashboard/organization.php?status=list_request_organization");
  }else {
    echo("Faled");
  }
?>
