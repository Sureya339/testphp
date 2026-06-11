<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bs5/css/bootstrap.min.css">
    <script src="bs5/css/bootstrap.bundle.min.js"></script>
    <title>login</title>
</head>

<body class="bg-dark">
    <div class="container-md pt-5 ">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-5">
                <div class="bg-light rounded p-md-3 d-flex shadow">
                    <div class="info ">
                        <img src="img/tiktok.png" alt="" class="rounded-circle w-25 h-25">
                        <h1 class="title text-secondary me-sm-2">Login</h1>
                    </div>
                    <form action="check.php" method="post" class="form-control flex-fill align-self-stretch">
                        <div class="mt-sm-1">
                            Email
                            <input type="text" name="email" class="form-control" placeholder="name@example.com">
                        </div>
                        <div class="mt-sm-1">
                            Password
                        </div>
                        <div class="mt-sm-1">
                            <input type="password" name="password" class="form-control"
                                placeholder="Enter your password">
                        </div>
                        <div class="mt-sm-3 align-middle">
                            <div class="row">
                                <div class="col-6"><input type="submit" value="Login" class="btn btn-primary w-100">
                                </div>
                                <div class="col-6"><input type="reset" value="Reset" class="btn btn-danger w-100"></div>
                            </div>
                        </div>
                        <div class="mt-sm-1">
                            <a href="register.php" class="">register</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>