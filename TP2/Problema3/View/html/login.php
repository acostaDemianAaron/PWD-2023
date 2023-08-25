<?php include("../../../../home/View/header.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/030b0c9fc7.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container p-4">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Member Login
        </button>

        <!-- Modal -->
        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body px-5">

                        <h2 class=" mx-auto mt-3 mb-5 text-center">Member Login</h2>
                        <form class="needs-validation" action="action/verificaPass.php" method="POST" name="form-login" id="form-login">
                            <div class="form-floating mb-4 p-1">
                                <i class="fa fa-user fa-xl position-absolute top-50 ms-2"></i>
                                <input type="text" class="form-control ps-5 py-2" id="username" name="username" placeholder="Username">
                                <label for="username" class="ps-5">Username</label>

                            </div>
                            <div class="form-floating mb-4 p-1">
                                <i class="fa fa-lock fa-xl position-absolute top-50 ms-2"></i>
                                <input type="password" class="form-control ps-5 py-2" id="password" name="password" placeholder="Password">
                                <label for="password" class="ps-5">Password</label>
                            </div>

                            <button class="w-100 btn btn-lg text-white mb-5" id="submit" name="submit" type="submit" style="background-color: #04AA6D">Login</button>
                        </form>
                    </div>
                </div>
            </div>

            <script src="../js/validar.js"></script>
</body>

</html>