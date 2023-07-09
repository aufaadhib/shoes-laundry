<?php
session_start();
$error = "";
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
        $error = "Gagal Login, Inputan Salah";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <title></title>
</head>
<body>
    <!-- Section: Design Block -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
            
                <div class="card my-5 bg-light">

                    <form class="card-body cardbody-color p-lg-4" action="auth.php" method="POST">
                    <h3 class="text-center text-dark ">LOGIN ADMIN</h3>
                        <?php
                        if ($error) {
                        ?>
                        <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                        </div>
                        <?php
                        header("refresh:2;url=index.php");
                        }
                        ?>
                        <div class="mb-3">
                            <input name="username" type="text" class="form-control" id="Username" placeholder="Username">
                        </div>
                        <div class="mb-3">
                            <input name="password" type="password" class="form-control" id="password" placeholder="password">
                        </div>
                        <div class="mb-3">
                            <img src="captcha.php">
                        </div>
                        <div class="mb-3">
                            <input name="captcha_code" type="text" class="form-control" id="captcha" placeholder="Captcha">
                        </div>
                        <div class="text-center"><button type="submit" class="btn btn-primary px-5 mb-5 w-100">Login</button></div>
                        <div id="emailHelp" class="form-text text-center mb-5 text-dark">BESHOES<a href="https://www.instagram.com/beshoescucisepatu/" target="blank" class="text-dark fw-bold"> Social Media?</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    
</body>
</html>