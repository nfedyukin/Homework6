<?php
$newsList = $this->data['newslist'][0];
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $newsList->headline ?></title>
</head>
<body>
<h1>
    <?php echo $newsList->headline ?>
</h1>
<i>
    <?php echo $newsList->created ?>
</i><br>
<?php echo $newsList->text ?>
<hr>
<i>
    <?php echo $newsList->author ?>
</i>
</body>
</html>