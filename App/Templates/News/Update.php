<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Форма</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h1 class="text-center">Редактировать</h1><br>

<div class="container">
    <?php if ($errors !== null): ?>
        <?php foreach ($errors as $error): ?>
            <div class="alert alert-danger">
                <?php echo $error->getMessage(); ?>
            </div>
        <?php endforeach; ?>
    <?php endif ?>
    <form class="form-horizontal" role="form" action="/Admin/Update?id=<?php echo $news['id']; ?>" method="post">
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Заголовок</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $news['title']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="text" class="col-sm-2 control-label">Текст новости</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" id="text" name="text" value="<?php echo $news['text']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">Автор</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" id="author" name="author"
                       value="<?php echo $news->author['author_name']; ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Сохранить</button>
                <a href="/Admin/Delete?id=<?php echo $news['id']; ?>" class="btn btn-default">Удалить новость</a>
                <a href="/Admin/Index" class="btn btn-default">На главную</a>
            </div>
        </div>
    </form>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>