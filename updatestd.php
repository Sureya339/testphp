<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>

<body>
    <?php
    $h = $_POST['hid'];
    $n = $_POST['sname'];
    $p = $_POST['phone'];
    $pwd = $_POST['password'];
    $e = $_POST['email'];
    $a = $_POST['address'];
    include "connectdb.php";
    $sql = "UPDATE tb_student set std_name='$n',std_mobile='$p',std_address='$a',std_email='$e',std_password='$pwd' where std_id='$h'";
    $res = mysqli_query($con, $sql);
    if ($res) {
        ?>
        <script>
            Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            }).fire({
                icon: "success",
                title: "Signed in successfully"
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                    window.location.href = "showstd.php";
                }
            });
        </script>
        <?php
    }
    // header("Location:")
    ?>
</body>

</html>