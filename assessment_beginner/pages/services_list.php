<?php
include "../db.php";
$result = mysqli_query($conn, "SELECT * FROM services ORDER BY service_id ASC");
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Services</title></head>
<body>
<?php include "../nav.php"; ?>
 
<div class="container">
  <h2>Services</h2>
  
  <table>
    <tr>
      <th>ID</th><th>Name</th><th>Rate</th><th>Active</th><th>Action</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?php echo $row['service_id']; ?></td>
        <td><?php echo $row['service_name']; ?></td>
        <td>₱<?php echo number_format($row['hourly_rate'],2); ?></td>
        <td><?php echo $row['is_active'] ? "Yes" : "No"; ?></td>
        <td><a class="btn btn-edit" href="services_edit.php?id=<?php echo $row['service_id']; ?>">Edit</a></td>
      </tr>
    <?php } ?>
  </table>
</div>

</body>
</html>