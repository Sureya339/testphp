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
    $name = $_POST['std_name'];
    $address = $_POST['std_address'];
    $mobile = $_POST['std_mobile'];
    $email = $_POST['std_email'];
    $password = $_POST['std_password'];

    include "connectdb.php";
    $sql = "insert into tb_student (std_name,std_address,std_mobile,std_email,std_password)values('$name','$address','$mobile','$email','$password')";
    $result = mysqli_query($con, $sql);
    if ($result) {
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
            });
        </script>
        <?php
    } else {

    }

    // header("Location: login.php");
    ?>
</body>

</html>