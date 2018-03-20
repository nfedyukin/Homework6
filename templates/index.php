<?php
$newsList = $this->data['newslist'];
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
</head>
<body>
<h1>Новости</h1>
<?php
foreach ($newsList as $news)
{
    ?><i><?php echo $news->created?> </i> : <a href="/Homework6/article.php?id=<?php echo $news->id ?>">
    <?php
    echo $news->headline;?></a> <br> <?php
    echo $news->text;?><br><?php
}
?>

</body>
</html>