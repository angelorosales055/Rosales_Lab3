<?php
include "../db.php";
$result = mysqli_query($conn, "SELECT * FROM clients ORDER BY client_id ASC");
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Clients</title>
</head>
<body>
  <?php include "../nav.php"; ?>

  <div class="container">
    <h2>Clients</h2>
    
    <a class="btn" href="clients_add.php">Add Client</a>
    <br><br>

    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Action</th> 
      </tr>

      <?php while($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?php echo $row['client_id']; ?></td>
        <td><?php echo $row['full_name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td>
          <a href="clients_edit.php?id=<?php echo $row['client_id']; ?>" class="btn" style="background-color: #f6c23e;">Edit</a>
        </td>
      </tr>
      <?php } ?>

    </table>
  </div>
</body>
</html>