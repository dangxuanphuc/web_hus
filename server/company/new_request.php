<?php
  include("../config.php");
  session_start();
  $request_name = $_POST["request_name"];
  $short_description = $_POST["description"];
  $amount = $_POST["amount"];
  $date_submit = date("y-m-d");
  $status = 3000;
  $organization_id = $_SESSION["organization_id"];
  $sql_ablity_dictionary = mysqli_query($conn, "SELECT * from ablity_dictionary ");

  $sql = "INSERT INTO company_recruitment_request_form(request_name, organization_id, short_description, amount, date_submitted, statuss) VALUES('$request_name', '$organization_id', '$short_description', '$amount', '$date_submit', '$status')";
  if (mysqli_query($conn, $sql)) {
    header("location:../../dashboard/layout_company.php?status=list_request_company");
  }else {
    echo("Faled");
  }
?>
