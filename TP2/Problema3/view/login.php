<?php include("../../../home/View/header.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../libs/Bootstrap5.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../libs/Bootstrap5.3.1/css/bootstrap.css">
    <script src="../../../libs/Bootstrap5.3.1/js/bootstrap.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/030b0c9fc7.js" crossorigin="anonymous"></script>
    <script src="../../../libs/jQuary/jquery-3.7.0.min.js"></script>
    <script src="../../../libs/jQuary/jquery.validate.min.js"></script>
    <script src="../../../libs/jQuary/translate-jQuery.js"></script>
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
                        <form class="needs-validation" action="action/verificaPass.php" method="POST">
                            <div class="form-floating mb-4 p-1">
                                <i class="fa fa-user fa-xl position-absolute top-50 ms-2"></i>
                                <input type="text" class="form-control ps-5 py-2" id="username" name="username" placeholder="Username" required>
                                <label for="username" class="ps-5">Username</label>
                                <div class="invalid-feedback position-absolute">
                                    Completa este campo
                                </div>
                            </div>
                            <div class="form-floating mb-4 p-1">
                                <i class="fa fa-lock fa-xl position-absolute top-50 ms-2"></i>
                                <input type="password" class="form-control ps-5 py-2" id="password" name="password" placeholder="Password" required>
                                <label for="password" class="ps-5">Password</label>
                                <div id="feedback" class="invalid-feedback position-absolute"></div>
                            </div>

                            <button class="w-100 btn btn-lg text-white mb-5" id="submit" type="submit" style="background-color: #04AA6D" disabled>Login</button>
                        </form>
                    </div>
                </div>
            </div>

            <script>
                (function() {
                    const inputs = document.querySelectorAll('.form-control')

                    inputs[0].addEventListener('change', event => {
                        if (inputs[0].value != "") {
                            inputs[0].classList.remove("is-invalid")
                            inputs[0].classList.add("is-valid")
                        } else {
                            inputs[0].classList.remove("is-valid")
                            inputs[0].classList.add("is-invalid")
                        }
                        if (inputs[0].classList.contains('is-valid') && inputs[1].classList.contains('is-valid')) {
                            document.querySelector('#submit').removeAttribute('disabled')
                        } else {
                            document.querySelector('#submit').setAttribute('disabled', '')
                        }
                    })

                    inputs[1].addEventListener('change', event => {
                        if (checkPass(inputs[1])) {
                            inputs[1].classList.remove("is-invalid")
                            inputs[1].classList.add("is-valid")
                        } else {
                            inputs[1].classList.remove("is-valid")
                            inputs[1].classList.add("is-invalid")
                        }
                        if (inputs[0].classList.contains('is-valid') && inputs[1].classList.contains('is-valid')) {
                            document.querySelector('#submit').removeAttribute('disabled')
                        } else {
                            document.querySelector('#submit').setAttribute('disabled', '')
                        }
                    })
                })()

                function checkPass(passElement) {
                    pass = passElement.value;
                    username = document.querySelector("#username").value;
                    var hasNum = false,
                        hasLet = false,
                        passLen = false;

                    if (pass.length >= 8 && pass != username) {
                        passLen = true;
                        let i = 0;

                        while (pass.length > i) {
                            pass[i].match(/[0-9]/i) ? hasNum = (hasNum || true) : hasNum;
                            pass[i].match(/[a-z]/i) ? hasLet = (hasLet || true) : hasLet;
                            i++;
                        }
                    }

                    if (!passLen) {
                        document.querySelector("#feedback").innerHTML = "Tiene que ser de mas de 8 caracteres."
                    } else if (!(hasNum && hasLet)) {
                        document.querySelector("#feedback").innerHTML = "Requiere al menos un numero y una letra."
                    }

                    return (hasNum && hasLet);
                }
            </script>


</body>

</html>