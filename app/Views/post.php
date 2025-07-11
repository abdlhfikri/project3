<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
<li class="nav-item">
    <a class="nav-link" href="<?=
base_url('post') ?>">Blog</a>

    <div class="container">
        <div class="row">
            <?php foreach ($posts as $post) : ?>
                <div class="col-md-12 my-2 card">
                    <div class="card-body">
                        <h5 class="h5"><a
href="/post/<?= $post['slug'] ?>"><?= $post['title'] ?></a></h5>
<p><?=
substr($post['content'], 0, 120) ?></p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

</body>
</html>