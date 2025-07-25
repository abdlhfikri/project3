<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>Faqs</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=
base_url('css/bootstrap.min.css') ?>" />
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top
bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?=
base_url() ?>">MyBlog</a>
            <button class="navbar-toggler"
type="button" data-bs-toggle="collapse" data-bstarget="#navbarNav" aria-controls="navbarNav" ariaexpanded="false" aria-label="Toggle navigation">
                <span class="navbar-togglericon"></span>
            </button>
            <div class="collapse navbar-collapse"
id="navbarNav"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link
active" aria-current="page" href="<?= base_url() ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
href="<?= base_url('about') ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
href="<?= base_url('post') ?>">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
href="<?= base_url('contact') ?>">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
href="<?= base_url('faqs') ?>">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="p-5 mb-4 bg-light rounded-3"></div>
    <div class="container">
            <div class="row">
                <div class="col-md-12 my-2 card">
                    <div class="card-body">
                        <h5 class="h5">Pertanyaan?
    (Q)</h5>
                        <p>(A) Lorem ipsum dolor
    sit amet consectetur adipisicing elit. </p>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>