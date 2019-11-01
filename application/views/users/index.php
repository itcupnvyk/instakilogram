<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <title>Users</title>
</head>

<body class="bg-light">
    <div class="container pt-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="text-center font-weight-bolder mb-4">
                    <h2 class="font-weight-bolder">InstakiloGram</h2>
                    <a href="<?= base_url('user/register') ?>" class="mx-auto">register</a>
                </div>
                <?php foreach ($users as $user) : ?>
                    <div class="bg-white row border-0 p-3 mb-3 shadow-sm">
                        <div class="col-10">
                            <span><?= $user['name'] ?> (<a href="#" class="text-muted">@<?= $user['username'] ?></a>)</span>
                        </div>
                        <div class="col-2">
                            <a href="<?= base_url('user/delete') . '/' . $user['id'] ?>" class="btn btn-light rounded-circle">
                                <ion-icon name="trash" class="text-danger"></ion-icon>
                            </a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>