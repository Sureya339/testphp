<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bs5/css/bootstrap.min.css">
  <script src="bs5/css/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>showstudent</title>
</head>

<body>
  <div class="container p-5">
    <?php
    include "connectdb.php";
    $sql = "SELECT * FROM `tb_student`";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    ?>
    <table class="table table-bordered table-responsive-sm table-hover rounded">
      <thead class="table-dark">
      <tr>
        <th colspan="8" class="h3">ข้อมูลนักเรียน <?php echo $num . " คน"; ?></th>
      </tr>
      <tr class="table-active">
        <th>ลำดับ</th>
        <th>ชื่อ</th>
        <th>ที่อยู่</th>
        <th>เบอร์โทร</th>
        <th>อีเมล์</th>
        <th>รหัสผ่าน</th>
        <th>จัดการ</th>
      </tr>
      </thead>

      <?php
      $n = 1;
      while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr class="table-hover">
          <td align="center"><?php echo $n++; ?></td>
          <td><?php echo $row['std_name']; ?></td>
          <td><?php echo $row['std_address']; ?></td>
          <td><?php echo $row['std_mobile']; ?></td>
          <td><?php echo $row['std_email']; ?></td>
          <td><?php echo $row['std_password']; ?></td>
          <td>
            <div class="btn-group w-100">
          <a href="edit.php?id=<?php echo $row['std_id']; ?>" class="btn btn-warning w-100">แก้ไข</a>
          <a href="delete.php?did=<?php echo $row['std_id']; ?>" class="btn btn-danger w-100" onclick="confirmDelete(event)">ลบ</a>
          </div>
        </td>
        </tr>
        <?php
      }
      ?>
    </table>

    <div class="btn-group">
      <a href="addstd.php" class="btn btn-primary">add student</a>
      <a href="login.php" class="btn btn-danger">logout</a>
    </div>
  </div>
</body>


<script>
function confirmDelete(event) {
    // 1. Prevent the default link redirection
    event.preventDefault(); 
    
    // 2. Get the target URL from the href attribute
    const urlToRedirect = event.currentTarget.getAttribute('href'); 

    // 3. Fire the SweetAlert2 popup
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel'
    }).then((result) => {
        // 4. Redirect if user clicked "Yes"
        if (result.isConfirmed) {
            window.location.href = urlToRedirect;
        }
    });
}
</script>

</html>