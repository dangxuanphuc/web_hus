<?php
  include "server/config.php";
  $sql = "SELECT org_profile.organization_name, org_profile.url, org_profile.avatar, COUNT(org_request.organization_id) count FROM intern_organization_requests org_request, intern_organization_profile org_profile WHERE org_request.organization_id = org_profile.id GROUP BY org_profile.organization_name ORDER BY count DESC LIMIT 7";
  $sql_result = mysqli_query($conn, $sql);
  $list_org = mysqli_fetch_assoc($sql_result);
?>
<div class="w3-row w3-container">
  <div class="w3-center w3-padding-64">
    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Các công ty nổi bật</span>
  </div>
  <?php while($row = mysqli_fetch_assoc($sql_result)) { ?>
    <div class="organization-block">
      <a href="<?php echo $row['url'] ?>" target="_blank">
        <img src="public/uploads/<?php echo $row['avatar'] ?>" alt="<?php echo $row['avatar'] ?>">
      </a>
    </div>
  <?php } ?>
</div>
