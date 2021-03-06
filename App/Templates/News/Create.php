<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Форма</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
<h1 class="text-center">Добавить новость</h1><br>
<div class="container">
    <?php if (isset($errors) && $errors !== null): ?>
        <?php foreach ($errors as $error): ?>
            <div class="alert alert-danger">
                <?php echo $error->getMessage(); ?>
            </div>
        <?php endforeach; ?>
    <?php endif ?>
    <form class="form-horizontal" role="form" action="/Admin/Create" method="post">
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Заголовок</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" placeholder="Заголовок">
            </div>
        </div>
        <div class="form-group">
            <label for="text" class="col-sm-2 control-label">Текст новости</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="text" name="text" placeholder="Новость"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">Автор</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" id="author" name="author" placeholder="Автор">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Сохранить</button>
            </div>
        </div>
    </form>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>