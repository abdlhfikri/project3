<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Detail</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5"><?=
$post['title'] ?></h5>
        <span><?= $post['author'] ?> | <?=
$post['created_at'] ?></span>
                <p><?=
$post['content'] ?></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>