<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data["judul"] ?></title>
    <link rel="stylesheet" href="<?= URL_UTAMA ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= URL_UTAMA ?>css/animate.min.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= URL_UTAMA ?>">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link " href="<?= URL_UTAMA ?>">Home</a>
                    <a class="nav-link" href="<?= URL_UTAMA ?>about">About</a>
                    <a class="nav-link" href="<?= URL_UTAMA ?>mahasiswa">Mahasiswa</a>
                    <a class="nav-link" href="<?= URL_UTAMA ?>DaftarBuku">Buku</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="mb-3"></div>