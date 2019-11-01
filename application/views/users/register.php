<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <title>Register</title>
</head>

<body class="bg-light">
    <div class="container pt-5">
        <div class="row">
            <div class="col-6 mx-auto align-middle">
                <form action="<?= base_url('user/create') ?>" method="POST" class="bg-white py-4 px-5 shadow-sm">
                    <a href="<?= base_url('') ?>" class="d-block h2 mb-3 text-center text-dark text-decoration-none">InstakiloGram</a>
                    <p class="h5 text-center font-weight-bolder text-muted mb-4">Sign up to see photos and videos from your friends.</p>
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <input name="username" type="text" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>
                    <p class="text-center grey">By signing up, you agree to our Terms , Data Policy and Cookies Policy .</p>
                </form>
            </div>
        </div>
    </div>
    <form action="" method="post">

    </form>

    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>

</html>