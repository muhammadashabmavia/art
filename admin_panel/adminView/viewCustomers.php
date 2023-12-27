  <div>
    <h2>All Customers</h2>
    <table class="table">
      <!-- Table headers -->
      <thead>
        <!-- Header row -->
        <tr>
          <!-- Header cells -->
          <th class="text-center">S.N.</th>
          <th class="text-center">Username</th>
          <th class="text-center">Email</th>
          <th class="text-center">Contact Number</th>
          <th class="text-center">Joining Date</th>
          <th class="text-center" colspan="2">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include_once "../config/dbconnect.php";
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
        $count = 1;
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
              <td><?= $count ?></td>
              <td><?= $row["first_name"] ?> <?= $row["last_name"] ?></td>
              <td><?= $row["email"] ?></td>
              <td><?= $row["contact_no"] ?></td>
              <td><?= $row["registered_at"] ?></td>
              <td><button class="btn btn-primary" style="height:40px" onclick="userEditForm('<?= $row['user_id'] ?>')">Edit</button></td>
              <td><button class="btn btn-danger" style="height:40px" onclick="userDelete('<?= $row['user_id'] ?>')">Delete</button></td>
            </tr>
        <?php
            $count = $count + 1;
          }
        }
        ?>
      </tbody>
    </table>

    <!-- Button to trigger modal for adding user -->
    <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
      Add User
    </button>

    <!-- Modal for adding new user -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">New User</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
          <form enctype='multipart/form-data' action="./controller/addUserController.php" method="POST">
      <div class="form-group">
          <label for="first_name">First Name:</label>
          <input type="text" class="form-control" name="first_name" required>
      </div>
      <div class="form-group">
          <label for="last_name">Last Name:</label>
          <input type="text" class="form-control" name="last_name" required>
      </div>
      <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" name="email" required>
      </div>
      <div class="form-group">
          <label for="contact_no">Contact Number:</label>
          <input type="text" class="form-control" name="contact_no" required>
      </div>
      <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" name="password" required>
      </div>
      <div class="form-group">
          <label for="user_address">User Address:</label>
          <input type="text" class="form-control" name="user_address" required>
      </div>
      <div class="form-group">
          <label for="isAdmin">Is Admin:</label>
          <input type="checkbox" name="isAdmin" value="1"> <!-- Assuming isAdmin is a checkbox -->
      </div>
      <div class="form-group">
          <button type="submit" class="btn btn-secondary" name="add_user" style="height:40px">Add User</button>
      </div>
  </form>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
