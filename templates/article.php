<?php
$newsList = $this->data['DB']->query($this->data['qry'],$this->data['dat'],'\News\Article');
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $newsList[0]->getHeadline() ?></title>
</head>
<body>
<h1>
    <?php echo $newsList[0]->getHeadline() ?>
</h1>
<i>
    <?php echo $newsList[0]->getCreated() ?>
</i><br>
<?php echo $newsList[0]->getText() ?>
<hr>
<i>
    <?php echo $newsList[0]->getAuthor() ?>
</i>
</body>
</html>